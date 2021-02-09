@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Provinsi') }}</div>

                <div class="card-body">
                    <form action="{{route('provinsi.update', $provinsi->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">Kode Provinsi</label>
                            <input type="text" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Provinsi</label>
                            <input type="text" name="nama_provinsi" value="{{$provinsi->nama_provinsi}}" class="form-control" required>
                        </div>
                        <button type="submit" class="float-left btn btn-outline-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
