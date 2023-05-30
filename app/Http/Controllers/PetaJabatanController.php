<?php

namespace App\Http\Controllers;

use App\Models\HubunganJabatan;
use Illuminate\Http\Request;
use App\Models\Dinas;
use App\Models\HakAksesModel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PetaExport;
use Spatie\Browsershot\Browsershot;


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

        $data = $this->generateData($dinas_id);

        return view('admin.laporan.detail1peta', $data);
    }

    public function peta($dinas_id)
    {
        if (auth()->user()->role == 'user') {
            $dinas_id = HakAksesModel::with('dinas')->where('user_id', auth()->user()->id)->first();
            if ($dinas_id->dinas_id != $dinas_id) {
                return redirect('/peta-jabatan')->with('Errors', 'Anda tidak mempunyai akses!');
            }
        }

        $data = $this->generateData($dinas_id);

        // $pdf = PDF::loadView('pdf.detailpeta', $data);
        $view = view('pdf.detailpeta', $data)->render();
        $pdf = Browsershot::html($view)->pdf();
        return response($pdf)->header('Content-Type', 'application/pdf');

        // return $pdf->stream('document.pdf');

        // return view('pdf.detailpeta', $data);
    }

    public function generateData($dinas_id)
    {
        $namaopd = Dinas::where('id', $dinas_id)->first()->nama_dinas;

        $rootJabatans = HubunganJabatan::whereDoesntHave('parents')
            ->where('dinas_id', $dinas_id)
            ->get();

        $jabatan_hierarchy = [];
        foreach ($rootJabatans as $rootJabatan) {
            $jabatan_hierarchy[$rootJabatan->datajabatan->nama_jabatan] = [
                'tree' => $rootJabatan->getTreeAttribute(),
                'pegawai' => $rootJabatan->pegawai,
                'tp_total' => round($rootJabatan->tp_total, 0, PHP_ROUND_HALF_EVEN),
                'peg_total_diff' => round($rootJabatan->pegawai - $rootJabatan->tp_total, 0, PHP_ROUND_HALF_EVEN)
            ];
        }

        return [
            'dinas_id' => $dinas_id,
            'namaopd' =>  $namaopd,
            'jabatan_hierarchy' => $jabatan_hierarchy,
            'active' => 'peta',
        ];
    }
}
