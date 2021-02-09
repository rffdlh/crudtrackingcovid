@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Kota') }}</div>

                <div class="card-body">
                    <form action="{{route('kota.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Provinsi</label>
                            <select name="id_provinsi" class="form-control" required>
                                @foreach($provinsi as $data)
                                <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kode Kota</label>
                            <input type="text" name="kode_kota" class="form-control" required><br>
                            @if ($errors->has('kode_kota'))
                                <span class="alert alert-danger">{{ $errors->first('kode_kota') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kota</label>
                            <input type="text" name="nama_kota" class="form-control" required><br>
                            @if ($errors->has('nama_kota'))
                                <span class="alert alert-danger">{{ $errors->first('nama_kota') }}</span>
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