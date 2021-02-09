@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Kasus') }}</div>

                <div class="card-body">
                    <form action="{{route('kasus1.update', $kasus1->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Provinsi</label>
                            <input type="text" name="nama_provinsi"  value="{{$kasus1->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}" class="form-control" id="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kota</label>
                            <input type="text" name="nama_kota"  value="{{$kasus1->rw->kelurahan->kecamatan->kota->nama_kota}}" class="form-control" id="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kecamatan</label>
                            <input type="text" name="nama_kecamatan"  value="{{$kasus1->rw->kelurahan->kecamatan->nama_kecamatan}}" class="form-control" id="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kelurahan</label>
                            <input type="text" name="nama_kelurahan"  value="{{$kasus1->rw->kelurahan->nama_kelurahan}}" class="form-control" id="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Rw</label>
                            <input type="text" name="rw"  value="{{$kasus1->rw->rw}}" class="form-control" id="" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Positif</label>
                            <input type="number" name="jumlah_positif" value="{{$kasus1->jumlah_positif}}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Sembuh</label>
                            <input type="number" name="jumlah_sembuh" value="{{$kasus1->jumlah_sembuh}}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Meninggal</label>
                            <input type="number" name="jumlah_meninggal" value="{{$kasus1->jumlah_meninggal}}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" value="{{$kasus1->tanggal}}" class="form-control" required>
                        </div>
                        <button type="submit" class="float-left btn btn-outline-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
