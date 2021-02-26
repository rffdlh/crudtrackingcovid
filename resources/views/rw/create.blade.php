@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TAMBAH DATA RW') }}</div>

                <div class="card-body">
                    <form action="{{route('rw.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">KELURAHAN</label>
                            <select name="id_kelurahan" class="form-control" required>
                                @foreach($kelurahan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kelurahan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">RW</label>
                            <input type="text" name="rw" class="form-control" value="{{@old('rw')}}" required><br>
                            @if ($errors->has('rw'))
                                <span class="alert alert-danger">{{ $errors->first('rw') }}</span>
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