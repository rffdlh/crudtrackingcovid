@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">{{ __('KASUS') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <a href="{{route('kasus1.create')}}" class="float-right btn btn-outline-primary">TAMBAH</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">LOKASI</th>
                                <th scope="col">RW</th>
                                <th scope="col">POSITIF</th>
                                <th scope="col">SEMBUH</th>
                                <th scope="col">MENINGGAL</th>
                                <th scope="col">TANGGAL</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($kasus1 as $data)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>KELURAHAN : {{$data->rw->kelurahan->nama_kelurahan}}<br>
                                    KECAMATAN : {{$data->rw->kelurahan->kecamatan->nama_kecamatan}}<br>
                                    KOTA : {{$data->rw->kelurahan->kecamatan->kota->nama_kota}}<br>
                                    PROVINSI : {{$data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}
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
                                        <a href="{{route('kasus1.show',$data->id)}}" class="float btn btn-outline-success">SHOW</a> |
                                        <a href="{{route('kasus1.edit',$data->id)}}" class="float btn btn-outline-warning">EDIT</a> |
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