@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TAMBAH DATA KELURAHAN') }}</div>

                <div class="card-body">
                    <form action="{{route('kelurahan.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">KECAMATAN</label>
                            <select name="id_kecamatan" class="form-control" required>
                                @foreach($kecamatan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">KELURAHAN</label>
                            <input type="text" name="nama_kelurahan" class="form-control" required><br>
                            @if ($errors->has('nama_kelurahan'))
                                <span class="alert alert-danger">{{ $errors->first('nama_kelurahan') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="float-left btn btn-outline-primary">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection