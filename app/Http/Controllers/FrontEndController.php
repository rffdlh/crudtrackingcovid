<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Country;

class FrontEndController extends Controller
{
    public function index()
    {
        $provinsi = DB::table('provinsis')
            ->join('kotas','kotas.id_provinsi','=','provinsis.id')
            ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasus1s','kasus1s.id_rw','=','rws.id')
            ->select('nama_provinsi',
                    DB::raw('sum(kasus1s.jumlah_positif) as jumlah_positif'),
                    DB::raw('sum(kasus1s.jumlah_sembuh) as jumlah_sembuh'),
                    DB::raw('sum(kasus1s.jumlah_meninggal) as jumlah_meninggal'))
            ->groupBy('nama_provinsi')
            ->get();
        $positif = DB::table('rws')
            ->select('kasus1s.jumlah_positif','kasus1s.jumlah_sembuh','kasus1s.jumlah_meninggal')
            ->join('kasus1s','rws.id','=','kasus1s.id_rw')
            ->sum('kasus1s.jumlah_positif');
        $sembuh = DB::table('rws')
            ->select('kasus1s.jumlah_positif','kasus1s.jumlah_sembuh','kasus1s.jumlah_meninggal')
            ->join('kasus1s','rws.id','=','kasus1s.id_rw')
            ->sum('kasus1s.jumlah_sembuh');
        $meninggal = DB::table('rws')
            ->select('kasus1s.jumlah_positif','kasus1s.jumlah_sembuh','kasus1s.jumlah_meninggal')
            ->join('kasus1s','rws.id','=','kasus1s.id_rw')
            ->sum('kasus1s.jumlah_meninggal');
        $negara = Country::all();
        return view('frontend.welcome', compact('provinsi','positif','sembuh','meninggal','negara'));
    }
}