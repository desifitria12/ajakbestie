<?php

namespace App\Http\Controllers;

use App\Models\BebanKerjaModel;
use App\Models\Dinas;
use App\Models\HakAksesModel;
use App\Models\HubunganJabatan;
use App\Models\Jabatan;
use App\Models\TugasPokok;
use Exception;
use Illuminate\Http\Request;

class BebanKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            'active' => 'analisisbebankerja',
        ];
        // dd($data);
        // return view('admin.manajerial.index', $data);
        return view('admin.bebankerja.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BebanKerjaModel  $bebanKerjaModel
     * @return \Illuminate\Http\Response
     */
    public function show(BebanKerjaModel $bebanKerjaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BebanKerjaModel  $bebanKerjaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(BebanKerjaModel $bebanKerjaModel, $kode_jabatan)
    {

        $jabatan = HubunganJabatan::with('datajabatan', 'data_tugas_pokok')->where('kode_jabatan', $kode_jabatan)->first();
        $beban_kerja = BebanKerjaModel::where('kode_jabatan', $kode_jabatan)->get();
        // dd($jabatan);
        $data = [
            'kode_jabatan' => $kode_jabatan,
            'beban_kerja' => $beban_kerja,
            'jabatan' => $jabatan,
            'active' => 'analisisbebankerja',
        ];


        return view('admin.bebankerja.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BebanKerjaModel  $bebanKerjaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BebanKerjaModel $bebanKerjaModel, $kode_jabatan)
    {
        $request->validate([
            // 'kode_jabatan' => 'required',
            'jumlah_hasil.*' => 'required|numeric|min:0',
            // 'jumlah_hasil' => 'required|numeric|min:0',
            'penyelesaian.*' => 'required|numeric|min:0',
            // 'penyelesaian' => 'required|numeric|min:0',
            // 'tingkat' => 'required|numeric|min:0',
            'pegawaiku' => 'required|numeric'
        ]);
        // dd($request);
        try {
            BebanKerjaModel::where('kode_jabatan', $kode_jabatan)->delete();
            $i = 0;
            // for ($i = 0; $i <= 9; $i++) {
            foreach ($request->jumlah as $index) {
                BebanKerjaModel::create([
                    'kode_jabatan' => $kode_jabatan,
                    'jumlah_hasil' => $request->jumlah[$i],
                    'penyelesaian' => $request->penyelesaian[$i],
                    'tingkat' => ($i + 1),
                ]);
                $i++;
            }
            HubunganJabatan::where('kode_jabatan', $kode_jabatan)->update(['pegawai' => $request->pegawaiku]);
            return redirect()->back()->withSuccess('Beban Kerja Berhasil Diperbaharui!');
        } catch (Exception $e) {
            return redirect()->back()->with('Errors', 'Gagal terdapat kesalahan sistem');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BebanKerjaModel  $bebanKerjaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BebanKerjaModel $bebanKerjaModel, $kode_jabatan)
    {

        try {
            BebanKerjaModel::where('kode_jabatan', $kode_jabatan)->delete();

            return redirect()->back()->with('Success', 'Data Beban Kerja Berhasil DIhapus!');
        } catch (Exception $e) {
            return redirect()->back()->with('Errors', 'Gagal terdapat kesalahan sistem');
        }
    }
}
