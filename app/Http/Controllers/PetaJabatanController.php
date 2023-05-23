<?php

namespace App\Http\Controllers;

use App\Models\HubunganJabatan;
use Illuminate\Http\Request;
use App\Models\Dinas;
use App\Models\HakAksesModel;

class PetaJabatanController extends Controller
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
            'active' => 'peta',
        ];
        return view('admin.laporan.indexpeta', $data);
    }
    public function detail($dinas_id)
    {
        if (auth()->user()->role == 'user') {
            $dinas_id = HakAksesModel::with('dinas')->where('user_id', auth()->user()->id)->first();
            if ($dinas_id->dinas_id != $dinas_id) {
                return redirect('/peta-jabatan')->with('Errors', 'Anda tidak mempunyai akses!');
            }
        }
        $namaopd = Dinas::where('id', $dinas_id)->first()->nama_dinas;

        $jabatans = HubunganJabatan::with('children')->where('dinas_id', $dinas_id)->get();

        $output = [];

        foreach ($jabatans as $jabatan) {
            if (count($jabatan->children) > 0) {
                $output[$jabatan->kode_jabatan] = array_map(function($child) {
                    return $child['child_jabatan'];
                }, $jabatan->children->toArray());
            } else {
                $output[$jabatan->kode_jabatan] = [];
            }
        }

        dd($output);

        // dd($dinas);
        // $values = [];
        // if ($dinas == 1) {
        //     $tingkatawal = 0;
        // } else {
        //     $tingkatawal = 1;
        // };
        // $hubunganjabatan = hubunganjabatan($dinas, $tingkatawal);
        // // dd($hubunganjabatan);
        // if ($hubunganjabatan->first() == NULL) {
        //     array_push($values, ['id' => 1, 'tags' => ['Struktural'], 'name' => "TIDAK ADA DATA"]);
        // }
        // // array_push($values, ['id' => $index->kode_jabatan, 'name' => $index->datajabatan->jenis_jabatan, 'name' => $index->datajabatan->nama_jabatan]);
        // if ($hubunganjabatan->first() != NULL) {
        //     // dd($hubunganjabatan);
        //     foreach ($hubunganjabatan as $index) {
        //         array_push($values, ['id' => $index->kode_jabatan, 'tags' => [$index->datajabatan->jenis_jabatan], 'name' => $index->datajabatan->nama_jabatan]);

        //         $parent = $index->kode_jabatan;
        //         if ($index->data_parent != NULL) {
        //             foreach ($index->data_parent as $index) {
        //                 $lvl2 = childjabatan($index->child_jabatan);
        //                 foreach ($lvl2 as $index) {
        //                     array_push($values, ['id' => $index->kode_jabatan, 'pid' => $parent, 'tags' => [$index->datajabatan->jenis_jabatan], 'name' => $index->datajabatan->nama_jabatan]);
        //                     $parent2 = $index->kode_jabatan;
        //                     if ($index->data_parent != NULL) {
        //                         foreach ($index->data_parent as $index) {
        //                             $lvl3 = childjabatan($index->child_jabatan);
        //                             foreach ($lvl3 as $index) {
        //                                 array_push($values, ['id' => $index->kode_jabatan, 'pid' => $parent2, 'tags' => [$index->datajabatan->jenis_jabatan], 'name' => $index->datajabatan->nama_jabatan]);
        //                                 $parent3 = $index->kode_jabatan;
        //                                 if ($index->data_parent != NULL) {
        //                                     foreach ($index->data_parent as $index) {
        //                                         $lvl4 = childjabatan($index->child_jabatan);
        //                                         foreach ($lvl4 as $index) {
        //                                             array_push($values, ['id' => $index->kode_jabatan, 'pid' => $parent3, 'tags' => [$index->datajabatan->jenis_jabatan], 'name' => $index->datajabatan->nama_jabatan]);
        //                                             $parent4 = $index->kode_jabatan;
        //                                             if ($index->data_parent != NULL) {
        //                                                 foreach ($index->data_parent as $index) {
        //                                                     $lvl5 = childjabatan($index->child_jabatan);
        //                                                     foreach ($lvl5 as $index) {
        //                                                         array_push($values, ['id' => $index->kode_jabatan, 'pid' => $parent4, 'tags' => [$index->datajabatan->jenis_jabatan], 'name' => $index->datajabatan->nama_jabatan]);
        //                                                         $parent5 = $index->kode_jabatan;
        //                                                     }
        //                                                 }
        //                                             }
        //                                         }
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     }
        //                 }
        //             }
        //         }
        //     }
        // }

        // dd($values);
        // dd(json_encode($values));
        $data = [
            'namaopd' =>  $namaopd,
            // 'jabatan' => json_encode($values),
            'active' => 'peta',
        ];

        return view('admin.laporan.detail1peta', $data);
    }
}
