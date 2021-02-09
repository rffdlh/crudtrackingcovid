@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Rw') }}</div>

                <div class="card-body">
                    <form action="{{route('rw.update', $rw->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">Kelurahan</label>
                            <select name="id_kelurahan" class="form-control" required>
                                @foreach($kelurahan as $data)
                                <option value="{{$data->id}}"
                                    {{ $data->id == $rw->id_kelurahan ? "selected" : "" }}>
                                    {{$data->nama_kelurahan}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rw</label>
                            <input type="text" name="rw" value="{{$rw->rw}}" class="form-control" required>
                        </div>
                        <button type="submit" class="float-left btn btn-outline-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
