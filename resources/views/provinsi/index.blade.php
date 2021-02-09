@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Provinsi') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <a href="{{route('provinsi.create')}}" class="float-right btn btn-outline-primary">Tambah</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Provinsi</th>
                                <th scope="col">Provinsi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($provinsi as $data)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{ $data->kode_provinsi }}</td>
                                <td>{{ $data->nama_provinsi }}</td>
                                <td>
                                    <form action="{{route('provinsi.destroy',$data->id)}}"  method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('provinsi.show',$data->id)}}" class="float btn btn-outline-success">Show</a> |
                                        <a href="{{route('provinsi.edit',$data->id)}}" class="float btn btn-outline-warning">Edit</a> |
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