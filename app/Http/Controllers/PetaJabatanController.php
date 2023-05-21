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
            $hak_akses = HakAksesModel::with('dinas')->where('user_id', auth()->user()->id)->first();
            $opd = Dinas::filter(request(['search']))->where('id', $hak_akses->dinas_id)->paginate(10)->withQueryString();
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
            $hak_akses = HakAksesModel::with('dinas')->where('user_id', auth()->user()->id)->first();
            if ($hak_akses->dinas_id != $dinas_id) {
                return redirect('/peta-jabatan')->with('Errors', 'Anda tidak mempunyai akses!');
            }
        }

        $namaopd = Dinas::where('id', $dinas_id)->first()->nama_dinas;

        // $values = [];
        // $tingkatawal = ($dinas_id == 1) ? 0 : 1;

        // $hubunganjabatan = HubunganJabatan::with('data_parent.detailchild.datajabatan', 'datajabatan')
        //     ->where('dinas_id', $dinas_id)
        //     ->first();

        // if (!$hubunganjabatan) {
        //     array_push($values, ['id' => 1, 'tags' => ['Struktural'], 'name' => "TIDAK ADA DATA"]);
        // }

        $jabatan_hierarchy = HubunganJabatan::getHierarchy($dinas_id);

        $data = [
            'namaopd' =>  $namaopd,
            // 'jabatan' => json_encode($values),
            'active' => 'peta',
            'jabatan_hierarchy' => $jabatan_hierarchy
        ];

        return view('admin.laporan.detail1peta', $data);
    }
}
