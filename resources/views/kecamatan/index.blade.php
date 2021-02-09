@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">{{ __('Kecamatan') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <a href="{{route('kecamatan.create')}}" class="float-right btn btn-outline-primary">Tambah</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kota</th>
                                <th scope="col">Kode Kecamatan</th>
                                <th scope="col">Kecamatan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($kecamatan as $data)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{ $data->kota->nama_kota }}</td>
                                <td>{{ $data->kode_kecamatan }}</td>
                                <td>{{ $data->nama_kecamatan }}</td>
                                <td>
                                    <form action="{{route('kecamatan.destroy',$data->id)}}"  method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('kecamatan.show',$data->id)}}" class="float btn btn-outline-success">Show</a> |
                                        <a href="{{route('kecamatan.edit',$data->id)}}" class="float btn btn-outline-warning">Edit</a> |
                                        <button type="submit" class="float btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin ?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection