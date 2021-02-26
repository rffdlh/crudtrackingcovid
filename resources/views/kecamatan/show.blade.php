@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SHOW DATA KECAMATAN') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">KOTA</label>
                            <input type="text" name="id_kota" value="{{$kecamatan->kota->nama_kota}}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">KECAMATAN</label>
                            <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <a href="{{ url()->previous() }}" class="float-left btn btn-outline-primary">KEMBALI</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
