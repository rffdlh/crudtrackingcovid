@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Provinsi') }}</div>
                <div class="card-body">
                    <form action="{{route('provinsi.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Kode Provinsi</label>
                            <input type="text" name="kode_provinsi" class="form-control" required><br>
                            @if ($errors->has('kode_provinsi'))
                                <span class="alert alert-danger">{{ $errors->first('kode_provinsi') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Provinsi</label>
                            <input type="text" name="nama_provinsi" class="form-control" required><br>
                            @if ($errors->has('nama_provinsi'))
                                <span class="alert alert-danger">{{ $errors->first('nama_provinsi') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="float-left btn btn-outline-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
