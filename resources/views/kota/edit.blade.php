@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT DATA KOTA') }}</div>

                <div class="card-body">
                    <form action="{{route('kota.update', $kota->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">PROVINSI</label>
                            <select name="id_provinsi" class="form-control" required>
                                @foreach($provinsi as $data)
                                <option value="{{$data->id}}"
                                    {{ $data->id == $kota->id_provinsi ? "selected" : "" }}>
                                    {{$data->nama_provinsi}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">KODE KOTA</label>
                            <input type="text" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">KOTA</label>
                            <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" required>
                        </div>
                        <button type="submit" class="float-left btn btn-outline-primary">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
