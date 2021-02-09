<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Provinsi;
use App\Models\Kasus1;

class ApiController extends Controller
{
    public $data = [];
    public function global()
    {
        $response = Http::get('https://api.kawalcorona.com')->json();
        foreach ($response as $data => $val) {
        $raw = $val['attributes'];
        $res = [
            'Negara' => $raw['Country_Region'],
            'Positif' => $raw['Confirmed'],
            'Sembuh' => $raw['Recovered'],
            'Meninggal' => $raw['Deaths']
        ];
        array_push($this->data, $res);
    }
    $data = [
        'Succes' => true,
        'Data' => $this->data,
        'Message' => 'Berhasil'
    ];
    return response()->json($data,200);
    }

    public function Indonesia2(){
        $positif = DB::table('kasus1s')
                ->sum('kasus1s.jumlah_positif');

        $sembuh = DB::table('kasus1s')
                ->sum('kasus1s.jumlah_sembuh');

        $meninggal = DB::table('kasus1s')
                ->sum('kasus1s.jumlah_meninggal');

        return response([
            'Success' => true,
            'Data' => [
            'Name' => 'Indonesia',
            'Positif'=> $positif,
            'Sembuh'=> $sembuh,
            'Meninggal'=> $meninggal,
            ],
        'Message' => ' Berhasil!',
        ]);
    }

    public function index()
    {
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
        
        $res = [
            'Success'          => true,
            'Data'             => 'Data Kasus Indonesia',
            'Jumlah Positif'   => $positif,
            'Jumlah Sembuh'    => $sembuh,
            'Jumlah Meninggal' => $meninggal,
            'Message'          => 'Data Kasus Ditampilkan'
        ];
        return response()->json($res,200);
    }

    public function indonesia($id)
    {
        $tampil = DB::table('provinsis')
            ->join('kotas','kotas.id_provinsi','=','provinsis.id')
            ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasus1s','kasus1s.id_rw','=','rws.id')
            ->where('provinsis.id',$id)
            ->select('nama_provinsi',
                    DB::raw('sum(kasus1s.jumlah_positif) as jumlah_positif'),
                    DB::raw('sum(kasus1s.jumlah_sembuh) as jumlah_sembuh'),
                    DB::raw('sum(kasus1s.jumlah_meninggal) as jumlah_meninggal'))
            ->groupBy('nama_provinsi')
            ->get();

        $data = [
            'Success'          => true,
            'Data Provinsi'    => $tampil,
            'Message'          => 'Data Kasus Ditampilkan'
        ];
        return response()->json($data,200);
    }

    public function provinsi()
    {
        $tampil = DB::table('provinsis')
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

        $data = [
            'Success'          => true,
            'Data Provinsi'    => $tampil,
            'Message'          => 'Data Kasus Ditampilkan'
        ];
        return response()->json($data,200);
    }

    public function kota()
    {
        $tampil = DB::table('kotas')
            ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasus1s','kasus1s.id_rw','=','rws.id')
            ->select('nama_kota',
                    DB::raw('sum(kasus1s.jumlah_positif) as jumlah_positif'),
                    DB::raw('sum(kasus1s.jumlah_sembuh) as jumlah_sembuh'),
                    DB::raw('sum(kasus1s.jumlah_meninggal) as jumlah_meninggal'))
            ->groupBy('nama_kota')
            ->get();

        $data = [
            'Success'          => true,
            'Data Kota'    => $tampil,
            'Message'          => 'Data Kasus Ditampilkan'
        ];
        return response()->json($data,200);
    }

    public function kecamatan()
    {
        $tampil = DB::table('kecamatans')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasus1s','kasus1s.id_rw','=','rws.id')
            ->select('nama_kecamatan',
                    DB::raw('sum(kasus1s.jumlah_positif) as jumlah_positif'),
                    DB::raw('sum(kasus1s.jumlah_sembuh) as jumlah_sembuh'),
                    DB::raw('sum(kasus1s.jumlah_meninggal) as jumlah_meninggal'))
            ->groupBy('nama_kecamatan')
            ->get();

        $data = [
            'Success'          => true,
            'Data Kecamatan'    => $tampil,
            'Message'          => 'Data Kasus Ditampilkan'
        ];
        return response()->json($data,200);
    }

    public function kelurahan()
    {
        $tampil = DB::table('kelurahans')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasus1s','kasus1s.id_rw','=','rws.id')
            ->select('nama_kelurahan',
                    DB::raw('sum(kasus1s.jumlah_positif) as jumlah_positif'),
                    DB::raw('sum(kasus1s.jumlah_sembuh) as jumlah_sembuh'),
                    DB::raw('sum(kasus1s.jumlah_meninggal) as jumlah_meninggal'))
            ->groupBy('nama_kelurahan')
            ->get();

        $data = [
            'Success'          => true,
            'Data Kelurahan'    => $tampil,
            'Message'          => 'Data Kasus Ditampilkan'
        ];
        return response()->json($data,200);
    }

    public function perhari(){

        $kasus1 = Kasus1::get('created_at')->last();
        $positif = Kasus1::where('tanggal', date('Y-m-d'))->sum('jumlah_positif');
        $sembuh = Kasus1::where('tanggal', date('Y-m-d'))->sum('jumlah_sembuh');
        $meninggal = Kasus1::where('tanggal', date('Y-m-d'))->sum('jumlah_meninggal');

        $join = DB::table('kasus1s')
                    ->select('jumlah_positif', 'jumlah_sembuh', 'jumlah_meninggal')
                    ->join('rws' ,'kasus1s.id_rw', '=', 'rws.id')
                    ->get();
        $data1 = [
            'Positif' =>$join->sum('jumlah_positif'),
            'Sembuh' =>$join->sum('jumlah_sembuh'),
            'Meninggal' =>$join->sum('jumlah_meninggal'),
        ];
        $data2 = [
            'Positif' =>$positif,
            'Sembuh' =>$sembuh,
            'Meninggal' =>$meninggal,
        ];
        $res = [
            'Status' => 200,
            'Data' => [
                'Hari Ini' => $data2,
                'Total' => $data1
            ],
            'Message' => 'Berhasil'
        ];
        
        return response()->json($res, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
