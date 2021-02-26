@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT DATA KECAMATAN') }}</div>

                <div class="card-body">
                    <form action="{{route('kecamatan.update', $kecamatan->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">KOTA</label>
                            <select name="id_kota" class="form-control" required>
                                @foreach($kota as $data)
                                <option value="{{$data->id}}"
                                    {{ $data->id == $kecamatan->id_kota ? "selected" : "" }}>
                                    {{$data->nama_kota}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">KECAMATAN</label>
                            <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}" class="form-control" required>
                        </div>
                        <button type="submit" class="float-left btn btn-outline-primary">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
