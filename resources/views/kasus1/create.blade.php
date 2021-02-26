@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TAMBAH DATA KASUS') }}</div>

                <div class="card-body">
                    <form action="{{route('kasus1.store')}}" method="POST">
                        @csrf
                        @livewireScripts
                        @livewire('kasus1')
                        @livewireStyles
                        <div class="mb-3">
                            <label class="form-label">JUMLAH POSITIF</label>
                            <input type="number" name="jumlah_positif" class="form-control" required><br>
                            @if ($errors->has('jumlah_positif'))
                                <span class="alert alert-danger">{{ $errors->first('jumlah_positif') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">JUMLAH SEMBUH</label>
                            <input type="number" name="jumlah_sembuh" class="form-control" required><br>
                            @if ($errors->has('jumlah_sembuh'))
                                <span class="alert alert-danger">{{ $errors->first('jumlah_sembuh') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">JUMLAH MENINGGAL</label>
                            <input type="number" name="jumlah_meninggal" class="form-control" required><br>
                            @if ($errors->has('jumlah_meninggal'))
                                <span class="alert alert-danger">{{ $errors->first('jumlah_meninggal') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">TANGGAL</label>
                            <input type="date" name="tanggal" class="form-control" required><br>
                            @if ($errors->has('tanggal'))
                                <span class="alert alert-danger">{{ $errors->first('tanggal') }}</span>
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