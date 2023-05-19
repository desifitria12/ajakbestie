<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Dinas;
use Illuminate\Http\Request;
use Exception;

class DinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $opd = DB::table('dinas');
        // // $opd = Dinas::get();
        // if (request('search')) {
        //     $opd->where('nama', 'like', '%' . request('search') . '%');
        // }

        $data = [
            'opd' =>  Dinas::filter(request(['search']))->orderBy('id', 'ASC')->paginate(10)->withQueryString(),
            'active' => 'opd',
        ];

        // dd($data);
        return view('admin.opd.index', $data);
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

        $validateData = $request->validate([
            'nama_dinas' => 'required|unique:dinas'
        ]);
        // dd($validateData);
        Dinas::create($validateData);

        return redirect()->back()->with('success', 'New Organisasi Perangkat Daerah has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama_dinas' => 'required',
            // 'id' => 'required|unique:dinas'
        ]);
        if ($id != $request->id) {
            $validateData = $request->validate([
                // 'nama_dinas' => 'required',
                'id' => 'required|unique:dinas'
            ]);
        }
        Dinas::where('id', $id)->update($validateData);

        return redirect()->back()->with('success', 'New Organisasi Perangkat Daerah has been Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Dinas::find($id)->delete();

            return redirect()->back()->withSuccess('Organisasi Perangkat Daerah has been deleted!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete OPD because data still used!');
        }
    }
}
