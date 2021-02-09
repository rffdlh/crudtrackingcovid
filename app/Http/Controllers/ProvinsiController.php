<?php

namespace App\Http\Controllers;

use App\Models\Provinsi; //untuk menghubungkan model dengan controller
use App\Http\Controllers\DB; //untuk menghubungkan ke database
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    //Session Login
    public function __construct() {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsi = Provinsi::all();
        return view('provinsi.index', compact('provinsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'kode_provinsi' => 'required|max:4|unique:provinsis',
            'nama_provinsi' => 'required|unique:provinsis',
        ],
        [
            'kode_provinsi.required' => 'Kode Harus di Isi',
            'kode_provinsi.max' => 'Kode Maksimal 4 Nomer',
            'kode_provinsi.unique' => 'Kode Sudah Dipakai',
            'nama_provinsi.required' => 'Nama Provinsi Harus di Isi',
            'nama_provinsi.unique' => 'Nama Sudah Dipakai',
        ]);

        $provinsi = new Provinsi; //$provinsi untuk membungkus sebuah model
        $provinsi->kode_provinsi = $request->kode_provinsi; //$request permintaan yang kita input
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.show', compact('provinsi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.edit', compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id)->delete();
        return redirect()->route('provinsi.index');
    }
}
