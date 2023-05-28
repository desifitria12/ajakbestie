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

        // $jabatan = HubunganJabatan::with('datajabatan', 'data_faktor.data_faktor', 'data_kompetensi.data_kompetensi', 'standarkompetensi', 'data_beban_kerja')
        //     ->filter(request(['search']))
        //     ->paginate(20)
        //     ->withQueryString();
        //     dd($jabatan);
        
        $rootJabatans = HubunganJabatan::whereDoesntHave('parents')
            ->where('dinas_id', $dinas_id)
            ->get();

        $jabatan_hierarchy = [];
        foreach ($rootJabatans as $rootJabatan) {
            $jabatan_hierarchy[$rootJabatan->datajabatan->nama_jabatan] = [
                'tree' => $rootJabatan->getTreeAttribute(),
                'pegawai' => $rootJabatan->pegawai,  // assuming pegawai attribute is available
                'tp_total' => round($rootJabatan->tp_total, 0, PHP_ROUND_HALF_EVEN),
                'peg_total_diff' => round($rootJabatan->pegawai - $rootJabatan->tp_total, 0, PHP_ROUND_HALF_EVEN)
            ];
        }

        // dd($jabatan_hierarchy);

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
