@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Data Provinsi') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">Kode Provinsi</label>
                            <input type="text" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Provinsi</label>
                            <input type="text" name="nama_provinsi" value="{{$provinsi->nama_provinsi}}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <a href="{{ url()->previous() }}" class="float-left btn btn-outline-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
