<?php

namespace App\Http\Controllers;

use App\Models\HakAksesModel;
use App\Models\HubunganJabatan;
use App\Models\Jabatan;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (auth()->user()->role == 'user') {
            $aksesdinas = HakAksesModel::where('user_id', auth()->user()->id)->first();
            $total = HubunganJabatan::with('datajabatan')->where('dinas_id', $aksesdinas->dinas_id)->count();
            $struktural = HubunganJabatan::with('datajabatan')->where('dinas_id', $aksesdinas->dinas_id)->whereHas('datajabatan', function ($query) {
                return $query->where('jenis_jabatan',  'struktural');
            })->count();
            $fungsional = HubunganJabatan::with('datajabatan')->where('dinas_id', $aksesdinas->dinas_id)->whereHas('datajabatan', function ($query) {
                return $query->where('jenis_jabatan',  'fungsional');
            })->count();
            $pelaksana = HubunganJabatan::with('datajabatan')->where('dinas_id', $aksesdinas->dinas_id)->whereHas('datajabatan', function ($query) {
                return $query->where('jenis_jabatan',  'pelaksana');
            })->count();
            $bebankerja = HubunganJabatan::with('data_beban_kerja', 'detaildinas')->where('dinas_id', $aksesdinas->dinas_id)->doesntHave('data_beban_kerja')->limit(10)->get();
            $data = [
                'active' => 'home',
                'total' => $total,
                'struktural' => $struktural,
                'fungsional' => $fungsional,
                'pelaksana' => $pelaksana,
                'bebankerja' => $bebankerja,
            ];
             // dd($jabatan);

        return view('dashboard', $data);
    
        
        }  elseif (auth()->user()->role == 'pimpinan') {
            $user = HakAksesModel::where('user_id', auth()->user()->id)->first();
            
            $jabatan = HubunganJabatan::with('datajabatan', 'data_faktor.data_faktor', 'data_kompetensi.data_kompetensi', 'standarkompetensi', 'data_beban_kerja')->filter(request(['search']))->paginate(20)->withQueryString();
        
     return view('dashboard1', [
            'jabatan' => $jabatan,
            'active' => 'home',
        ]);
        }else {
            
            $total = HubunganJabatan::with('datajabatan')->count();
            $struktural = HubunganJabatan::with('datajabatan')->whereHas('datajabatan', function ($query) {
                return $query->where('jenis_jabatan',  'struktural');
            })->count();
            $fungsional = HubunganJabatan::with('datajabatan')->whereHas('datajabatan', function ($query) {
                return $query->where('jenis_jabatan',  'fungsional');
            })->count();
            $pelaksana = HubunganJabatan::with('datajabatan')->whereHas('datajabatan', function ($query) {
                return $query->where('jenis_jabatan',  'pelaksana');
            })->count();

            $bebankerja = HubunganJabatan::with('datajabatan', 'data_beban_kerja', 'detaildinas')->doesntHave('data_beban_kerja')->limit(10)->get();
            $jabatan = Jabatan::with('bahan_kerja', 'tugas_pokok', 'perangkat_kerja', 'lingkungan_kerja')->ordoesntHave('bahan_kerja')->ordoesntHave('tugas_pokok')->ordoesntHave('perangkat_kerja')->ordoesntHave('lingkungan_kerja')->limit(10)->get();
            $data = [
                'active' => 'home',
                'total' => $total,
                'struktural' => $struktural,
                'fungsional' => $fungsional,
                'pelaksana' => $pelaksana,
                'bebankerja' => $bebankerja,
                'jabatan' => $jabatan,
            ];
             // dd($jabatan);

        return view('dashboard', $data);
    }
        }

       
   
   
    
}
