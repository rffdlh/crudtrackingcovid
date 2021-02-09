<?php

namespace App\Http\Controllers;

use App\Models\Kasus1;
use App\Models\Rw;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class Kasus1Controller extends Controller
{
    //Session Login
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kasus1 = Kasus1::with('rw')->get();
        return view('kasus1.index', compact('kasus1'));
    }

    public function create()
    {
        $rw = Rw::all();
        return view('kasus1.create',compact('rw'));
    }

    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'jumlah_positif' => 'required|max:6|unique:kasus1s',
            'jumlah_sembuh' => 'required|max:6|unique:kasus1s',
            'jumlah_meninggal' => 'required|max:6|unique:kasus1s',
            'tanggal' => 'required|unique:kasus1s',
        ],
        [
            'jumlah_positif.required' => 'Jumlah Harus di Isi',
            'jumlah_positif.max' => 'Jumlah Maksimal 6 Nomer',

            'jumlah_sembuh.required' => 'Jumlah Harus di Isi',
            'jumlah_sembuh.max' => 'Jumlah Maksimal 6 Nomer',

            'jumlah_meninggal.required' => 'Jumlah Harus di Isi',
            'jumlah_meninggal.max' => 'Jumlah Maksimal 6 Nomer',

            'tanggal.required' => 'Tanggal Harus di Isi',
        ]);

        $kasus1 = new Kasus1();
        $kasus1->id_rw = $request->id_rw;
        $kasus1->jumlah_positif = $request->jumlah_positif;
        $kasus1->jumlah_sembuh = $request->jumlah_sembuh;
        $kasus1->jumlah_meninggal = $request->jumlah_meninggal;
        $kasus1->tanggal = $request->tanggal;
        $kasus1->save();
        return redirect()->route('kasus1.index');
    }

    public function show($id)
    {
        $kasus1 = Kasus1::findOrFail($id);
        return view('kasus1.show',compact('kasus1'));
    }

    public function edit($id)
    {
        $rw = Rw::all();
        $kasus1 = Kasus1::findOrFail($id);
        return view('kasus1.edit',compact('kasus1','rw'));
    }

    public function update(Request $request, $id)
    {
        $kasus1 = Kasus1::findOrFail($id);
        $kasus1->jumlah_positif = $request->jumlah_positif;
        $kasus1->jumlah_sembuh = $request->jumlah_sembuh;
        $kasus1->jumlah_meninggal = $request->jumlah_meninggal;
        $kasus1->tanggal = $request->tanggal;
        $kasus1->save();
        return redirect()->route('kasus1.index');
    }

    public function destroy($id)
    {
        $kasus1 = Kasus1::findOrFail($id)->delete();
        return redirect()->route('kasus1.index');
    }
}
