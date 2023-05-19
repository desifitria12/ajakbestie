<?php

namespace App\Http\Controllers;

use App\Models\HubunganJabatan;
use App\Models\HubunganJabatanParent;
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
    public function detail($dinas)
    {
        if (auth()->user()->role == 'user') {
            $dinas_id = HakAksesModel::with('dinas')->where('user_id', auth()->user()->id)->first();
            if ($dinas_id->dinas_id != $dinas) {
                return redirect('/peta-jabatan')->with('Errors', 'Anda tidak mempunyai akses!');
            }
        }
        $namaopd = Dinas::where('id', $dinas)->first()->nama_dinas;
        // dd($dinas);
        $values = [];
        if ($dinas == 1) {
            $tingkatawal = 0;
        } else {
            $tingkatawal = 1;
        };
        // $hubunganjabatan = hubunganjabatan($dinas, $tingkatawal);

        $hubunganjabatan = HubunganJabatan::with('data_parent.detailchild.datajabatan', 'datajabatan')->where([
            ['dinas_id', $dinas],        
        ])->first();


        // dd($hubunganjabatan);
        // if ($hubunganjabatan->first() == NULL) {
        //     array_push($values, ['id' => 1, 'tags' => ['Struktural'], 'name' => "TIDAK ADA DATA"]);
        // }

        if (!$hubunganjabatan) {
            array_push($values, ['id' => 1, 'tags' => ['Struktural'], 'name' => "TIDAK ADA DATA"]);
        }

        // dd($hubunganjabatan->data_parent[0]->detailchild->datajabatan->nama_jabatan);

        $parentJabatan = [];

        $hubunganjabatanparent= HubunganJabatanParent::pluck('parent_jabatan')->toArray();

        foreach ($hubunganjabatan->data_parent as $child) {
            $parent_jabatan = $hubunganjabatan->datajabatan->nama_jabatan;
            $nama_jabatan = $child->detailchild->datajabatan->nama_jabatan;
            
            // Check if the parent_jabatan already exists in the $parentJabatan array
            if (!isset($parentJabatan['parent_jabatan'])) {
                // Create an array with the parent_jabatan and initialize child_data with the first nama_jabatan
                $parentJabatan['parent_jabatan'] = $parent_jabatan;
                $parentJabatan['child_data'] = [$nama_jabatan];
            } else {
                // If the parent_jabatan already exists, append the current nama_jabatan to the child_data array
                $parentJabatan['child_data'][] = $nama_jabatan;
            }

            // dd($child);

            // testing

            if(in_array($child->detailchild->kode_jabatan, $hubunganjabatanparent)) {
                dd("test");
            }
            // if ($child->detail) {
            //     # code...
            // }
        }
        

        // View the contents of the $parentJabatan array
        // dd($parentJabatan);
        

        // dd($childs);

        // hubungan_jabatan_parent (parent_jabatan / child_jabatan) -> (kode_jabatan) hubungan_jabatan (jabatan_id) -> (id) jabatan (nama_jabatan)
        // expected data
        // $child = [01 - 01.01, 01 - 01.02, 01 - 01.03]    

        // array_push($values, ['id' => $index->kode_jabatan, 'name' => $index->datajabatan->jenis_jabatan, 'name' => $index->datajabatan->nama_jabatan]);
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
        // dd($parentJabatan);
        $data = [
            'namaopd' =>  $namaopd,
            'jabatan' => json_encode($values),
            'active' => 'peta',
            'parentJabatan' => $parentJabatan
        ];

        return view('admin.laporan.detail1peta', $data);
    }
}
