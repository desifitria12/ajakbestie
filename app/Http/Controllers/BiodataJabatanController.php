<?php

namespace App\Http\Controllers;

use App\Models\BebanKerjaModel;
use App\Models\Dinas;
use App\Models\HakAksesModel;
use App\Models\HubunganJabatan;
use App\Models\BiodataJabatanModel;
use App\Models\Jabatan;
use Exception;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\IsEmpty;

class BiodataJabatanController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'user') {
            $dinas_id = HakAksesModel::with('dinas')->where('user_id', auth()->user()->id)->first();
            $opd = Dinas::filter(request(['search']))->where('id', $dinas_id->dinas_id)->paginate(10)->withQueryString();
        } else {
            
            $opd = Dinas::filter(request(['search']))->orderBy('id', 'ASC')->paginate(10)->withQueryString();
        }
        $data = [
            'opd' =>  $opd,
            'active' => 'biodatajabatan',
        ];
         
        return view('admin.biodata_jabatan.index1', $data);
    }

    

    
    public function show(BiodataJabatanModel $BiodataJabatanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BiodataJabatanModel  $BiodataJabatanModel
     * @return \Illuminate\Http\Response
     */
    public function edit(BiodataJabatanModel $biodataJabatanModel, $kode_jabatan){
        $jabatan = HubunganJabatan::with('datajabatan', 'data_beban_kerja')->filter(request(['search']))->where('kode_jabatan', $kode_jabatan)->first();
        $biodata = BiodataJabatanModel::where('kode_jabatan', $kode_jabatan)->get();

        $count = BebanKerjaModel::where('kode_jabatan', $kode_jabatan)->select('id')->get()->count();

        if($count == 0){
            //echo "kosong";
            if (auth()->user()->role == 'user') {
                $dinas_id = HakAksesModel::with('dinas')->where('user_id', auth()->user()->id)->first();
                $opd = Dinas::filter(request(['search']))->where('id', $dinas_id->dinas_id)->paginate(10)->withQueryString();
            } else {
                $opd = Dinas::filter(request(['search']))->orderBy('id', 'ASC')->paginate(10)->withQueryString();
            }
            $data = [
                'opd' =>  $opd,
                'jabatan' => $jabatan,
                'active' => 'biodatajabatan',
            ];
            return redirect()->back()->with('Message', 'Data Beban Kerja Jabatan '.$jabatan->datajabatan->nama_jabatan.' Kosong, Silahkan isi Data Beban Kerja Terlebih Dahulu!');
        } else {
            $data = [
                'kode_jabatan' => $kode_jabatan,
                'biodata' => $biodata,
                'jabatan' => $jabatan,
                'active' => 'biodatajabatan',
            ];
            //echo "ada";
            return view('admin.biodata_jabatan.edit', $data);
        }
        echo $count;
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BiodataJabatanModel  $BiodataJabatanModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BiodataJabatanModel $BiodataJabatanModel, $kode_jabatan)
    {
       // dd($kode_jabatan);
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'masa_kerja_jabatan_tahun' => 'required',
            'masa_kerja_jabatan_bulan' => 'required',
            'masa_kerja_keseluruhan_tahun' => 'required',
            'masa_kerja_keseluruhan_bulan' => 'required',
            'riwayat' => 'required',
            'tahun_diangkat' => 'required',
            'tahun_pensiun' => 'required',
            'pangkat' => 'required',
            'golongan' => 'required',
            'jenjang_pendidikan' => 'required',
            'jurusan' => 'required',
            
        ]);
        
        try {
            BiodataJabatanModel::where('kode_jabatan', $kode_jabatan)->delete();
            $i = 0;
            // for ($i = 0; $i <= 9; $i++) {
            foreach ($request->nip as $index) {
                BiodataJabatanModel::create([
                    'kode_jabatan' => $kode_jabatan,
                    'nip' => $request->nip[$i],
                    'nama' => $request->nama[$i],
                    'tempat_lahir' => $request->tempat_lahir[$i],
                    'tanggal_lahir' => $request->tanggal_lahir[$i],
                    'masa_kerja_jabatan_tahun' => $request->masa_kerja_jabatan_tahun[$i],
                    'masa_kerja_jabatan_bulan' => $request->masa_kerja_jabatan_bulan[$i],
                    'masa_kerja_keseluruhan_tahun' => $request->masa_kerja_keseluruhan_tahun[$i],
                    'masa_kerja_keseluruhan_bulan' => $request->masa_kerja_keseluruhan_bulan[$i],
                    'riwayat' => $request->riwayat[$i],
                    'tahun_diangkat' => $request->tahun_diangkat[$i],
                    'tahun_pensiun' => $request->tahun_pensiun[$i],
                    'pangkat' => $request->pangkat[$i],
                    'golongan' => $request->golongan[$i],
                    'jenjang_pendidikan' => $request->jenjang_pendidikan[$i],
                    'jurusan' => $request->jurusan[$i],
                    'updated_at' => now(),
                    
                ]);
                $i++;
            }
            return redirect()->back()->with('success', 'Biodata Jabatan Berhasil Ditambahkan!');
        } catch (Exception $e) {
            return redirect()->back()->with('errors', 'Gagal terdapat kesalahan sistem');
        }
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BiodataJabatanModel  $BiodataJabatanModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BiodataJabatanModel $BiodataJabatanModel, $kode_jabatan)
    {

        try {
            BiodataJabatanModel::where('kode_jabatan', $kode_jabatan)->delete();

            return redirect()->back()->with('Success', 'Data Biodata Jabatan Berhasil DIhapus!');
        } catch (Exception $e) {
            return redirect()->back()->with('Errors', 'Gagal terdapat kesalahan sistem');
        }
}}
