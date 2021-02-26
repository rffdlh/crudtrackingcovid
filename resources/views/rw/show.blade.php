@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SHOW DATA RW') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">KELURAHAN</label>
                            <input type="text" name="id_kelurahan" value="{{$rw->kelurahan->nama_kelurahan}}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">RW</label>
                            <input type="text" name="rw" value="{{$rw->rw}}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <a href="{{ url()->previous() }}" class="float-left btn btn-outline-primary">KEMBALI</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
