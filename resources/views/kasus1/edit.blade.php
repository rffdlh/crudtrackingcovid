@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT DATA KASUS') }}</div>

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
                            <label class="form-label">PROVINSI</label>
                            <input type="text" name="nama_provinsi"  value="{{$kasus1->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}" class="form-control" id="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">KOTA</label>
                            <input type="text" name="nama_kota"  value="{{$kasus1->rw->kelurahan->kecamatan->kota->nama_kota}}" class="form-control" id="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">KECAMATAN</label>
                            <input type="text" name="nama_kecamatan"  value="{{$kasus1->rw->kelurahan->kecamatan->nama_kecamatan}}" class="form-control" id="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">KELURAHAN</label>
                            <input type="text" name="nama_kelurahan"  value="{{$kasus1->rw->kelurahan->nama_kelurahan}}" class="form-control" id="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">RW</label>
                            <input type="text" name="rw"  value="{{$kasus1->rw->rw}}" class="form-control" id="" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">JUMLAH POSITIF</label>
                            <input type="number" name="jumlah_positif" value="{{$kasus1->jumlah_positif}}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">JUMLAH SEMBUH</label>
                            <input type="number" name="jumlah_sembuh" value="{{$kasus1->jumlah_sembuh}}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">JUMLAH MENINGGAL</label>
                            <input type="number" name="jumlah_meninggal" value="{{$kasus1->jumlah_meninggal}}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">TANGGAL</label>
                            <input type="date" name="tanggal" value="{{$kasus1->tanggal}}" class="form-control" required>
                        </div>
                        <button type="submit" class="float-left btn btn-outline-primary">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
