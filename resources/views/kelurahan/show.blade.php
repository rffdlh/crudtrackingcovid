@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Data Kelurahan') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">Kecamatan</label>
                            <input type="text" name="id_kecamatan" value="{{$kelurahan->kecamatan->nama_kecamatan}}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kode Kelurahan</label>
                            <input type="text" name="kode_kelurahan" value="{{$kelurahan->kode_kelurahan}}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelurahan</label>
                            <input type="text" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" class="form-control" readonly>
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
