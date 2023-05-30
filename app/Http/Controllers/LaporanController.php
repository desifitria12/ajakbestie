<?php

namespace App\Http\Controllers;

use App\Exports\HubunganJabatanExport;
use App\Models\Dinas;
use App\Models\HakAksesModel;
use App\Models\HubunganJabatan;
use App\Models\BiodataJabatanModel;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RekapBiodataExport;
use Illuminate\Pagination\LengthAwarePaginator;

// use vendor\phpoffice\phpword;
class LaporanController extends Controller
{
    public function standarkompetensi($kode_jabatan)
    {
        $jabatan = HubunganJabatan::with('data_kompetensi.data_kompetensi', 'datajabatan', 'kompetensi_teknis', 'standarkompetensi')->where('kode_jabatan', $kode_jabatan)->first();
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template\StandarKompetensiJabatan.docx');
        $values = [];
        if ($jabatan->data_kompetensi->first() == NULL) {
            $i = 0;
            while ($i < 8) {
                array_push($values, ['no' => $i + 1, 'nama_kompetensi' => '', 'level' => '', 'deskripsi' => '', 'indikator' => '']);
                $i++;
            }
        } else {
            $i = 0;
            foreach ($jabatan->data_kompetensi as $index) {
                if ($i == 8) {
                    $i++;
                    break;
                }
                array_push($values, ['no' => $i + 1, 'nama_kompetensi' => $index->data_kompetensi->nama_kompetensi, 'level' => $index->data_kompetensi->level, 'deskripsi' => str_replace("\n", '<w:br/>', $index->data_kompetensi->deskripsi), 'indikator' =>  str_replace("\n", '<w:br/>', $index->data_kompetensi->indikator)]);
                $i++;
            }
            while ($i < 8) {
                array_push($values, ['no' => $i + 1, 'nama_kompetensi' => '', 'level' => '', 'deskripsi' => '', 'indikator' => '']);
                $i++;
            }
        }

        $templateProcessor->cloneRowAndSetValues('no', $values);
        // dd($jabatan->data_kompetensi->first());
        if ($jabatan->data_kompetensi->first() != NULL) {
            $templateProcessor->setValues(array(
                'no#9' => '9',
                'nama_kompetensi#9' => $jabatan->data_kompetensi[8]->data_kompetensi->nama_kompetensi,
                'level#9' => $jabatan->data_kompetensi[8]->data_kompetensi->level,
                'deskripsi#9' => str_replace("\n", '<w:br/>', $jabatan->data_kompetensi[8]->data_kompetensi->deskripsi),
                'indikator#9' => str_replace("\n", '<w:br/>', $jabatan->data_kompetensi[8]->data_kompetensi->indikator),
            ));
        } else {
            $templateProcessor->setValues(array(
                'no#9' => '9',
                'nama_kompetensi#9' => NULL,
                'level#9' => NULL,
                'deskripsi#9' => NULL,
                'indikator#9' => NULL,
            ));
        }
        $values = [];
        if ($jabatan->kompetensi_teknis->first() == NULL) {
            $i = 0;
            while ($i < 4) {
                array_push($values, ['no_teknis' => $i + 1, 'nama_kompetensi_teknis' => '', 'level_teknis' => '', 'deskripsi_teknis' => '', 'indikator_teknis' => '']);
                $i++;
            }
        } else {
            $i = 0;
            foreach ($jabatan->kompetensi_teknis as $index) {
                array_push($values, ['no_teknis' => $i + 1, 'nama_kompetensi_teknis' => $index->nama_kompetensi, 'level_teknis' => $index->level, 'deskripsi_teknis' => str_replace("\n", '<w:br/>', $index->deskripsi), 'indikator_teknis' =>  str_replace("\n", '<w:br/>', $index->indikator)]);
                $i++;
            }
            while ($i < 4) {
                array_push($values, ['no_teknis' => $i + 1, 'nama_kompetensi_teknis' => '', 'level_teknis' => '', 'deskripsi_teknis' => '', 'indikator_teknis' => '']);
                $i++;
            }
        }
        $templateProcessor->cloneRowAndSetValues('no_teknis', $values);

        $templateProcessor->setValues(array(
            'ikhtisar' => str_replace("\n", '<w:br/>', $jabatan->datajabatan->ikhtisar),
            'nama_jabatan' => $jabatan->datajabatan->nama_jabatan,
            'kode_jabatan' => $jabatan->kode_jabatan,
            'pdd_formal' => $jabatan->datajabatan->pdd_formal,
            'pdd_jurusan' => str_replace("\n", '<w:br/>', $jabatan->datajabatan->pdd_jurusan),
            'pelatihan_struktural' => $jabatan->datajabatan->pelatihan_struktural,
            'pelatihan_fungsional' => $jabatan->datajabatan->pelatihan_fungsional,
            'pelatihan_teknis' => $jabatan->datajabatan->pelatihan_teknis,
            'pengalaman_kerja' => str_replace("\n", '<w:br/>', $jabatan->datajabatan->pengalaman_kerja),
        ));
        if ($jabatan->standarkompetensi != NULL) {
            $templateProcessor->setValues(array(
                'pangkat' => $jabatan->standarkompetensi->pangkat,
                'urusan_pemerintahan' => $jabatan->standarkompetensi->urusan_pemerintahan,
                'kelompok_jabatan' => $jabatan->standarkompetensi->kelompok_jabatan,
                'indikator_kinerja' => str_replace("\n", '<w:br/>', $jabatan->standarkompetensi->indikator_kinerja),
            ));
        } else {
            $templateProcessor->setValues(array(
                'pangkat' => NULL,
                'urusan_pemerintahan' => NULL,
                'kelompok_jabatan' => NULL,
                'indikator_kinerja' => NULL,
            ));
        }

        $pathToSave = '3. [' . $jabatan->kode_jabatan . '] ' . $jabatan->datajabatan->nama_jabatan . '.docx';
        $templateProcessor->saveAs($pathToSave);
        return response()->download($pathToSave)->deleteFileAfterSend(true);
    }
    public function informasiJabatan($kode_jabatan)
    {

        $jabatan = HubunganJabatan::with('data_faktor.data_faktor', 'data_syarat', 'data_lingkungan', 'data_korelasi', 'datajabatan', 'data_tugas_pokok', 'data_bahan_kerja', 'data_beban_kerja', 'data_perangkat_kerja')->where('kode_jabatan', $kode_jabatan)->first();
        //   dd($jabatan->data_tugas_pokok[0]['tingkat']);
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template\InformasiJabatan.docx');

        $templateProcessor->setValues(array(
            'ikhtisar' => str_replace("\n", '<w:br/>', $jabatan->datajabatan->ikhtisar),
            'nama_jabatan' => $jabatan->datajabatan->nama_jabatan,
            'kode_jabatan' => $jabatan->kode_jabatan,
            'jpt_madya' => $jabatan->jpt_madya,
            'jpt_pratama' => $jabatan->jpt_pratama,
            'administrator' => $jabatan->administrator,
            'pengawas' => $jabatan->pengawas,
            'pdd_formal' => $jabatan->datajabatan->pdd_formal,
            'pdd_jurusan' => str_replace("\n", '<w:br/>', $jabatan->datajabatan->pdd_jurusan),
            'pelatihan_struktural' => $jabatan->datajabatan->pelatihan_struktural,
            'pelatihan_fungsional' => $jabatan->datajabatan->pelatihan_fungsional,
            'pelatihan_teknis' => $jabatan->datajabatan->pelatihan_teknis,
            'pengalaman_kerja' => $jabatan->datajabatan->pengalaman_kerja,
            'hasil_kerja_jabatan' => str_replace("\n", '</w:t><w:br/><w:t>', $jabatan->datajabatan->hasil_kerja_jabatan),
            'tanggung_jawab' => str_replace("\n", '</w:t><w:br/><w:t>', $jabatan->datajabatan->tanggung_jawab),
            'wewenang' => str_replace("\n", '<w:br/>', $jabatan->datajabatan->wewenang),
            'prestasi_harapan' => str_replace("\n", '</w:t><w:br/><w:t>', $jabatan->datajabatan->prestasi_harapan),
        ));
        //Isi data table Tugas Pokok
        $values = [];
        if ($jabatan->data_tugas_pokok->first() == NULL) {
            $i = 0;
            while ($i < 10) {
                array_push($values, ['tp_tingkat' => $i + 1, 'tp_uraian_tugas' => '', 'tp_hasil_kerja' => '', 'tp_hasil' => '', 'tp_penyelesaian' => '', 'tp_kebutuhan' => '']);
                $i++;
            }
        }
        $i = 0;
        $tp_total = 0;
        foreach ($jabatan->data_beban_kerja as $index) {
            array_push($values, ['tp_tingkat' => $jabatan->data_tugas_pokok[$i]['tingkat'], 'tp_uraian_tugas' => $jabatan->data_tugas_pokok[$i]['uraian_tugas'], 'tp_hasil_kerja' => $jabatan->data_tugas_pokok[$i]['hasil_kerja'], 'tp_hasil' => $index->jumlah_hasil, 'tp_penyelesaian' => $index->penyelesaian, 'tp_kebutuhan' => ($index->penyelesaian / 1250) * $index->jumlah_hasil,]);
            $i++;
            $tp_total += ($index->penyelesaian / 1250) * $index->jumlah_hasil;
        }
        while ($i < $jabatan->data_tugas_pokok->count()) {
            array_push($values, ['tp_tingkat' => $jabatan->data_tugas_pokok[$i]['tingkat'], 'tp_uraian_tugas' => $jabatan->data_tugas_pokok[$i]['uraian_tugas'], 'tp_hasil_kerja' => $jabatan->data_tugas_pokok[$i]['hasil_kerja'], 'tp_hasil' => '', 'tp_penyelesaian' => '', 'tp_kebutuhan' => '']);
            $i++;
        }
        $templateProcessor->setValue('tp_total', round($tp_total, 3));
        $templateProcessor->setValue('tp_pegawai', round($tp_total, 0, PHP_ROUND_HALF_EVEN));
        $templateProcessor->cloneRowAndSetValues('tp_tingkat', $values);
        // Isi Data Bahan Kerja
        $values = [];
        if ($jabatan->data_bahan_kerja->first() == NULL) {
            $i = 0;
            while ($i < 10) {
                array_push($values, ['bk_tingkat' => $i + 1, 'bahan_kerja' => '', 'bk_penggunaan' => '']);
                $i++;
            }
        } else {
            $i = 0;
            foreach ($jabatan->data_bahan_kerja as $index) {
                array_push($values, ['bk_tingkat' => $index->tingkat, 'bahan_kerja' => $index->bahan_kerja, 'bk_penggunaan' => $index->penggunaan_bahan]);
                $i++;
            }
            while ($i < 10) {
                array_push($values, ['bk_tingkat' => $i + 1, 'bahan_kerja' => '', 'bk_penggunaan' => '']);
                $i++;
            }
        }
        $templateProcessor->cloneRowAndSetValues('bk_tingkat', $values);

        // Isi Data Perangkat Kerja
        $values = [];
        if ($jabatan->data_perangkat_kerja->first() == NULL) {
            $i = 0;
            while ($i < 10) {
                array_push($values, ['pk_tingkat' => $i + 1, 'perangkat_kerja' => '', 'pk_penggunaan' => '']);
                $i++;
            }
        } else {
            $i = 0;
            foreach ($jabatan->data_perangkat_kerja as $index) {
                array_push($values, ['pk_tingkat' => $index->tingkat, 'perangkat_kerja' => $index->perangkat_kerja, 'pk_penggunaan' => $index->penggunaan]);
                $i++;
            }
            while ($i < 10) {
                array_push($values, ['pk_tingkat' => $i + 1, 'perangkat_kerja' => '', 'bk_penggunaan' => '']);
                $i++;
            }
        }
        $templateProcessor->cloneRowAndSetValues('pk_tingkat', $values);

        // Isi Data Korelasi
        $values = [];
        if ($jabatan->data_korelasi->first() == NULL) {
            $i = 0;
            while ($i < 3) {
                array_push($values, ['kj_tingkat' => $i + 1, 'kj_nama_jabatan' => '', 'kj_unit_kerja' => '', 'kj_deskripsi' => '']);
                $i++;
            }
        } else {
            $i = 0;
            foreach ($jabatan->data_korelasi as $index) {
                array_push($values, ['kj_tingkat' => $i + 1, 'kj_nama_jabatan' => $index->nama_jabatan, 'kj_unit_kerja' => $index->unit_kerja, 'kj_deskripsi' => $index->deskripsi]);
                $i++;
            }
            while ($i < 3) {
                array_push($values, ['kj_tingkat' => $i + 1, 'kj_nama_jabatan' => '', 'kj_unit_kerja' => '', 'kj_deskripsi' => '']);
                $i++;
            }
        }
        $templateProcessor->cloneRowAndSetValues('kj_tingkat', $values);
        // Data Lingkungan
        if ($jabatan->data_lingkungan != NULL) {
            $templateProcessor->setValues(array(
                'lk_dalam' => $jabatan->data_lingkungan->tempat_kerja,
                'lk_luar' => 100 - $jabatan->data_lingkungan->tempat_kerja,
                'lk_suhu' => $jabatan->data_lingkungan->suhu,
                'lk_udara' => $jabatan->data_lingkungan->udara,
                'lk_ruangan' => $jabatan->data_lingkungan->keadaan_ruangan,
                'lk_letak' => $jabatan->data_lingkungan->letak,
                'lk_penerangan' => $jabatan->data_lingkungan->penerangan,
                'lk_suara' => $jabatan->data_lingkungan->suara,
                'lk_keadaan' => $jabatan->data_lingkungan->keadaan_tempat_kerja,
                'lk_getaran' => $jabatan->data_lingkungan->getaran,
                'lk_fisik' => $jabatan->data_lingkungan->fisik,
                'lk_mental' => $jabatan->data_lingkungan->mental,
                'lk_bakat' => $jabatan->data_lingkungan->bakat,
            ));
        } else {
            $templateProcessor->setValues(array(
                'lk_dalam' => NULL,
                'lk_luar' => NULL,
                'lk_suhu' => NULL,
                'lk_udara' => NULL,
                'lk_ruangan' => NULL,
                'lk_letak' => NULL,
                'lk_penerangan' => NULL,
                'lk_suara' => NULL,
                'lk_keadaan' => NULL,
                'lk_getaran' => NULL,
                'lk_fisik' => NULL,
                'lk_mental' => NULL,
            ));
        }
        $kelasjabatan = 0;
        foreach ($jabatan->data_faktor as $index) {
            $kelasjabatan += $index->data_faktor->nilai;
        }
        // dd($kelasjabatan);
        // dd(hubungandata($jabatan->data_syarat->hubungan_data));
        if ($jabatan->data_syarat != NULL) {
            $templateProcessor->setValues(array(
                'sj_jenis_kelamin' => $jabatan->data_syarat->jenis_kelamin,
                'sj_umur' => $jabatan->data_syarat->umur,
                'sj_tinggi' => $jabatan->data_syarat->tinggi,
                'sj_berat' => $jabatan->data_syarat->berat,
                'sj_postur' => $jabatan->data_syarat->postur,
                'sj_penampilan' => $jabatan->data_syarat->penampilan,
                'sj_keterampilan' => str_replace("\n", '<w:br/>', $jabatan->data_syarat->keterampilan),
                'sj_upaya_fisik' =>  ucwords(str_replace(",", ', ', $jabatan->data_syarat->upaya_fisik)),
                'kelas_jabatan' => kelasjabatan1($kelasjabatan),
                'sj_hubungan_data' => implode('<w:br/>', hubungandata($jabatan->data_syarat->hubungan_data)),
                'sj_hubungan_benda' => implode('<w:br/>', hubunganbenda($jabatan->data_syarat->hubungan_benda)),
                'sj_hubungan_orang' => implode('<w:br/>', hubunganorang($jabatan->data_syarat->hubungan_orang)),
                'sj_bakat' => implode('<w:br/>', bakat($jabatan->data_syarat->bakat)),
                'sj_tempramen' => implode('<w:br/>', temperamen($jabatan->data_syarat->temperamen)),
                'sj_minat' => implode('<w:br/>', minat($jabatan->data_syarat->minat)),

            ));
        } else {
            $templateProcessor->setValues(array(
                'sj_jenis_kelamin' => NULL,
                'sj_umur' => NULL,
                'sj_tinggi' => NULL,
                'sj_berat' => NULL,
                'sj_postur' => NULL,
                'sj_penampilan' => NULL,
                'sj_keterampilan' => NULL,
                'sj_upaya_fisik' =>  NULL,
                'kelas_jabatan' => kelasjabatan1($kelasjabatan),
                'sj_hubungan_data' => NULL,
                'sj_hubungan_benda' => NULL,
                'sj_hubungan_orang' => NULL,
                'sj_bakat' => NULL,
                'sj_tempramen' => NULL,
                'sj_minat' => NULL,

            ));
        }
        // dd($jabatan->data_faktor);

        $pathToSave = '1. [' . $jabatan->kode_jabatan . '] ' . $jabatan->datajabatan->nama_jabatan . '.docx';
        $templateProcessor->saveAs($pathToSave);
        return response()->download($pathToSave)->deleteFileAfterSend(true);
    }

    public function faktorJabatan($kode_jabatan)
    {
        $jabatan = HubunganJabatan::with('data_faktor.data_faktor', 'datajabatan', 'data_tugas_pokok')->where('kode_jabatan', $kode_jabatan)->first();
        // dd($jabatan);
        if ($jabatan->data_faktor->count() == 7) {
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template\InformasiFaktorJabatanSturktural.docx');
            $values = [];
            $i = 1;
            foreach ($jabatan->data_tugas_pokok as $index) {
                array_push($values, $i . '. ' . $index->uraian_tugas);
                $i++;
            };

            if ($jabatan->data_tugas_pokok == NULL) {
                array_push($values, 'Tidak ada Data, Silahkan hubungin admin');
            }
            // dd($values);

            $templateProcessor->setValues(array(
                'nama_jabatan' => $jabatan->datajabatan->nama_jabatan,
                'unit_organisasi' => $jabatan->datajabatan->nama_unit,
                'ikhtisar' => str_replace("\n", '<w:br/>', $jabatan->datajabatan->ikhtisar),
                'tanggung_jawab' => str_replace("\n", '<w:br/>', $jabatan->datajabatan->tanggung_jawab),
                'hasil_kerja' => str_replace("\n", '<w:br/>', $jabatan->datajabatan->hasil_kerja_jabatan),
                'uraian_tugas' => implode('<w:br/>', $values),
            ));
            $values = [];
            $total = 0;
            foreach ($jabatan->data_faktor as $index) {
                array_push($values, ['tingkat' => $index->data_faktor->nama_faktor, 'nilai' => $index->data_faktor->nilai, 'indikator' => $index->data_faktor->indikator]);
                $total += $index->data_faktor->nilai;
            }
            // dd($total);
            $templateProcessor->setValues(array(
                'tingkat#1' => $values[0]['tingkat'],
                'nilai#1' => $values[0]['nilai'],
                'indikator#1' => str_replace("\n", '<w:br/>', $values[0]['indikator']),
                'tingkat#2' => $values[1]['tingkat'],
                'nilai#2' => $values[1]['nilai'],
                'indikator#2' => str_replace("\n", '<w:br/>', $values[1]['indikator']),
                'tingkat#3' => $values[2]['tingkat'],
                'nilai#3' => $values[2]['nilai'],
                'indikator#3' => str_replace("\n", '<w:br/>', $values[2]['indikator']),
                'tingkat#4' => $values[3]['tingkat'],
                'nilai#4' => $values[3]['nilai'],
                'indikator#4' => str_replace("\n", '<w:br/>', $values[3]['indikator']),
                'tingkat#5' => $values[4]['tingkat'],
                'nilai#5' => $values[4]['nilai'],
                'indikator#5' => str_replace("\n", '<w:br/>', $values[4]['indikator']),
                'tingkat#6' => $values[5]['tingkat'],
                'nilai#6' => $values[5]['nilai'],
                'indikator#6' => str_replace("\n", '<w:br/>', $values[5]['indikator']),
                'tingkat#7' => $values[6]['tingkat'],
                'nilai#7' => $values[6]['nilai'],
                'indikator#7' => str_replace("\n", '<w:br/>', $values[6]['indikator']),
                'total' => $total,
                'kelas' => kelasjabatan1($total),
                'rangekelas' => rangekelas($total),
            ));
            // $templateProcessor->SetValues(array($values));
            $pathToSave = '2. [' . $jabatan->kode_jabatan . '] ' . $jabatan->datajabatan->nama_jabatan . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->download($pathToSave)->deleteFileAfterSend(true);
        } else if ($jabatan->data_faktor->count() == 9) {
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template\InformasiFaktorJabatanFungsional.docx');
            $values = [];
            $i = 1;
            foreach ($jabatan->data_tugas_pokok as $index) {
                array_push($values, $i . '. ' . $index->uraian_tugas);
                $i++;
            };
            if ($jabatan->data_tugas_pokok == NULL) {
                array_push($values, 'Tidak ada Data, Silahkan hubungin admin');
            }
            // dd($values);

            $templateProcessor->setValues(array(
                'nama_jabatan' => $jabatan->datajabatan->nama_jabatan,
                'unit_organisasi' => $jabatan->datajabatan->nama_unit,
                'ikhtisar' => str_replace("\n", '<w:br/>', $jabatan->datajabatan->ikhtisar),
                'tanggung_jawab' => str_replace("\n", '<w:br/>', $jabatan->datajabatan->tanggung_jawab),
                'hasil_kerja' => str_replace("\n", '<w:br/>', $jabatan->datajabatan->hasil_kerja_jabatan),
                'uraian_tugas' => implode('<w:br/>', $values),
                'jenis_jabatan' => strtoupper($jabatan->datajabatan->jenis_jabatan),
            ));
            $values = [];
            $total = 0;
            foreach ($jabatan->data_faktor as $index) {
                array_push($values, ['tingkat' => $index->data_faktor->nama_faktor, 'nilai' => $index->data_faktor->nilai, 'indikator' => $index->data_faktor->indikator]);
                $total += $index->data_faktor->nilai;
            }
            // dd($values[0]['tingkat']);
            $templateProcessor->setValues(array(
                'tingkat#1' => $values[0]['tingkat'],
                'nilai#1' => $values[0]['nilai'],
                'indikator#1' => str_replace("\n", '<w:br/>', $values[0]['indikator']),
                'tingkat#2' => $values[1]['tingkat'],
                'nilai#2' => $values[1]['nilai'],
                'indikator#2' => str_replace("\n", '<w:br/>', $values[1]['indikator']),
                'tingkat#3' => $values[2]['tingkat'],
                'nilai#3' => $values[2]['nilai'],
                'indikator#3' => str_replace("\n", '<w:br/>', $values[2]['indikator']),
                'tingkat#4' => $values[3]['tingkat'],
                'nilai#4' => $values[3]['nilai'],
                'indikator#4' => str_replace("\n", '<w:br/>', $values[3]['indikator']),
                'tingkat#5' => $values[4]['tingkat'],
                'nilai#5' => $values[4]['nilai'],
                'indikator#5' => str_replace("\n", '<w:br/>', $values[4]['indikator']),
                'tingkat#6' => $values[5]['tingkat'],
                'nilai#6' => $values[5]['nilai'],
                'indikator#6' => str_replace("\n", '<w:br/>', $values[5]['indikator']),
                'tingkat#7' => $values[6]['tingkat'],
                'nilai#7' => $values[6]['nilai'],
                'indikator#7' => str_replace("\n", '<w:br/>', $values[6]['indikator']),
                'tingkat#8' => $values[7]['tingkat'],
                'nilai#8' => $values[7]['nilai'],
                'indikator#8' => str_replace("\n", '<w:br/>', $values[7]['indikator']),
                'tingkat#9' => $values[8]['tingkat'],
                'nilai#9' => $values[8]['nilai'],
                'indikator#9' => str_replace("\n", '<w:br/>', $values[8]['indikator']),
                'total' => $total,
                'kelas' => kelasjabatan1($total),
                'rangekelas' => rangekelas($total),
            ));
            // $templateProcessor->SetValues(array($values));
            $pathToSave = '2. [' . $jabatan->kode_jabatan . '] ' . $jabatan->datajabatan->nama_jabatan . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->download($pathToSave)->deleteFileAfterSend(true);
        } else {

            return redirect('/laporan-faktor-jabatan')->with('Errors', 'Data faktor tidak ada silahkan hubungin admin untuk isi data!');
            // return view('admin.laporan.indexfaktor', $data)->with('Errors', 'Data faktor tidak ada silahkan diisi terlebih dahulu!');
        }
    }
    public function rekapitulasi()
    {
        if (auth()->user()->role == 'user') {
            $user = HakAksesModel::with('dinas')->where('user_id', auth()->user()->id)->first();
            return Excel::download(new HubunganJabatanExport, 'Rekapitulasi Jabatan [' . $user->dinas->nama_dinas . '].xlsx');
        } else {
            return Excel::download(new HubunganJabatanExport, 'Rekapitulasi Jabatan.xlsx');
        }
    }

    public function indexinformasijabatan()
    {
        if (auth()->user()->role == 'user') {
            $dinas_id = HakAksesModel::with('dinas')->where('user_id', auth()->user()->id)->first();
            $opd = Dinas::filter(request(['search']))->where('id', $dinas_id->dinas_id)->paginate(10)->withQueryString();
        } else {
            $opd = Dinas::filter(request(['search']))->orderBy('id', 'ASC')->paginate(10)->withQueryString();
        }
        $data = [
            'opd' =>  $opd,
            'active' => 'laporan',
        ];
        return view('admin.laporan.indexjabatan', $data);
    }
    public function indexrekapabk()
    {
        if (auth()->user()->role == 'user') {
            $user = HakAksesModel::where('user_id', auth()->user()->id)->first();
            $jabatan = HubunganJabatan::with('datajabatan', 'data_faktor.data_faktor', 'data_kompetensi.data_kompetensi', 'standarkompetensi', 'data_beban_kerja')->filter(request(['search']))->where('dinas_id', $user->dinas_id)->paginate(20)->withQueryString();
        } else {
            $jabatan = HubunganJabatan::with('datajabatan', 'data_faktor.data_faktor', 'data_kompetensi.data_kompetensi', 'standarkompetensi', 'data_beban_kerja')->filter(request(['search']))->paginate(20)->withQueryString();
        }
        return view('admin.laporan.indexrekap', [
            'jabatan' => $jabatan,
            'active' => 'laporan',
        ]);
    }
    public function indexfaktorjabatan()
    {
        if (auth()->user()->role == 'user') {
            $dinas_id = HakAksesModel::with('dinas')->where('user_id', auth()->user()->id)->first();
            $opd = Dinas::filter(request(['search']))->where('id', $dinas_id->dinas_id)->paginate(10)->withQueryString();
        } else {
            $opd = Dinas::filter(request(['search']))->orderBy('id', 'ASC')->paginate(10)->withQueryString();
        }
        $data = [
            'opd' =>  $opd,
            'active' => 'laporan',
        ];
        return view('admin.laporan.indexfaktor', $data);
    }
    public function indexkompetensijabatan()
    {
        if (auth()->user()->role == 'user') {
            $dinas_id = HakAksesModel::with('dinas')->where('user_id', auth()->user()->id)->first();
            $opd = Dinas::filter(request(['search']))->where('id', $dinas_id->dinas_id)->paginate(10)->withQueryString();
        } else {
            $opd = Dinas::filter(request(['search']))->orderBy('id', 'ASC')->paginate(10)->withQueryString();
        }
        $data = [
            'opd' =>  $opd,
            'active' => 'laporan', 
        ];
        return view('admin.laporan.indexkompetensi', $data);
    }

    
    public function indexrekapbiodatajabatan()
    {
        if (auth()->user()->role == 'user') {
            $dinas_id = HakAksesModel::with('dinas')->where('user_id', auth()->user()->id)->first();
            $opd = Dinas::filter(request(['search']))->where('id', $dinas_id->dinas_id)->paginate(10)->withQueryString();
        } else {
            $opd = Dinas::filter(request(['search']))->orderBy('id', 'ASC')->paginate(10)->withQueryString();
        }
        $data = [
            'opd' =>  $opd,
            'active' => 'laporan',
        ];
        return view('admin.laporan.indexbiodata', $data);
    }

    public function detailrekapbiodata($dinas_id)
    {       
        $namaopd = Dinas::where('id', $dinas_id)->first()->nama_dinas;

        return view('admin.laporan.detailrekapbiodata', [
            'dinas_id' => $dinas_id,
            'namaopd' => $namaopd,
            'active' => 'laporan',
        ]);
    }
    
    public function biodata($dinas_id)
    {
        return Excel::download(new RekapBiodataExport($dinas_id), 'Rekap Biodata Jabatan.xlsx');
    }
    
}
