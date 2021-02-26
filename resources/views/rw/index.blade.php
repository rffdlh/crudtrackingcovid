@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">{{ __('RW') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <a href="{{route('rw.create')}}" class="float-right btn btn-outline-primary">TAMBAH</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">KELURAHAN</th>
                                <th scope="col">RW</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($rw as $data)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{ $data->kelurahan->nama_kelurahan }}</td>
                                <td>{{ $data->rw }}</td>
                                <td>
                                    <form action="{{route('rw.destroy',$data->id)}}"  method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('rw.show',$data->id)}}" class="float btn btn-outline-success">SHOW</a> |
                                        <a href="{{route('rw.edit',$data->id)}}" class="float btn btn-outline-warning">EDIT</a> |
                                        <button type="submit" class="float btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin ?')">
                                            DELETE
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