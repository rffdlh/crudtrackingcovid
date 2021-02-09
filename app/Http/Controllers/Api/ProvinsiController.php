<?php

// Api mengambil atau menampilkan data

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
// use App\Models\Kota;
// use App\Models\Kecamatan;
// use App\Models\Kelurahan;
// use App\Models\Rw;
// use App\Models\Kasus1;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsi = Provinsi::latest()->get();
        $res = [
            'success' => true,
            'data'    => $provinsi,
            'message' => 'Data Provinsi Ditampilkan'
        ];
        return response()->json($res,200);
    }

    public function store(Request $request)
    {
        $provinsi = new Provinsi();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();

        $res = [
            'success' => true,
            'data'    => $provinsi,
            'message' => 'Data Berhasil Ditambah'
        ];
        return response()->json($res,200);
    }

    public function show($id)
    {
        $provinsi = Provinsi::whereId($id)->first();
        $res = [
            'success' => true,
            'data'    => $provinsi,
            'message' => 'Berhasil'
        ];
        return response()->json($res,200);
    }

    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();
        $res = [
            'success' => true,
            'data'    => $provinsi,
            'message' => 'Data Berhasil Dihapus'
        ];
        return response()->json($res,200);
    }
}