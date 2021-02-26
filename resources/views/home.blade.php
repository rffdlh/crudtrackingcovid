@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>{{ __('COVID-19') }}</center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>{{ __('SELAMAT DATANG DI HALAMAN UTAMA') }}</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
