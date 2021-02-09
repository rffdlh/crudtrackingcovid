@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">{{ __('Kasus') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <a href="{{route('kasus1.create')}}" class="float-right btn btn-outline-primary">Tambah</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Rw</th>
                                <th scope="col">Positif</th>
                                <th scope="col">Sembuh</th>
                                <th scope="col">Meninggal</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($kasus1 as $data)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>Kelurahan : {{$data->rw->kelurahan->nama_kelurahan}}<br>
                                            Kecamatan : {{$data->rw->kelurahan->kecamatan->nama_kecamatan}}<br>
                                            Kota : {{$data->rw->kelurahan->kecamatan->kota->nama_kota}}<br>
                                            Provinsi : {{$data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}
                                </td>
                                <td>{{ $data->rw->rw }}</td>
                                <td>{{ $data->jumlah_positif }}</td>
                                <td>{{ $data->jumlah_sembuh }}</td>
                                <td>{{ $data->jumlah_meninggal }}</td>
                                <td>{{ $data->tanggal }}</td>
                                <td>
                                    <form action="{{route('kasus1.destroy',$data->id)}}"  method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('kasus1.show',$data->id)}}" class="float btn btn-outline-success">Show</a> |
                                        <a href="{{route('kasus1.edit',$data->id)}}" class="float btn btn-outline-warning">Edit</a> |
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