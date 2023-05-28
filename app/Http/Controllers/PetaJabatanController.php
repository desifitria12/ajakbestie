<?php

namespace App\Http\Controllers;

use App\Models\HubunganJabatan;
use Illuminate\Http\Request;
use App\Models\Dinas;
use App\Models\HakAksesModel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PetaExport;

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

        // Fetch all root nodes (i.e., jabatan without a parent in the specified dinas)
        $rootJabatans = HubunganJabatan::whereDoesntHave('parents')
            ->where('dinas_id', $dinas_id)
            ->get();

        $jabatan_hierarchy = [];
        foreach ($rootJabatans as $rootJabatan) {
            $jabatan_hierarchy[$rootJabatan->datajabatan->nama_jabatan] = $rootJabatan->tree;
        }

        $data = [
            'namaopd' =>  $namaopd,
            'jabatan_hierarchy' => $jabatan_hierarchy,
            'active' => 'peta',
        ];

        return view('admin.laporan.detail1peta', $data);
    }


    public function peta()
    {
        return Excel::download(new PetaExport, 'Peta Jabatan.xlsx');
        
    }
}
