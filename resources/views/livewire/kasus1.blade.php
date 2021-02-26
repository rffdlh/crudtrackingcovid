<div>
    <div class="form-group row ">
        <div class="col-md-6">
        <label for="provinsi">PROVINSI</label>
            <select wire:model="selectedProvinsi" class="form-control">
                <option value="" selected>PILIH PROVINSI</option>
                @foreach($provinsi as $provinsis)
                    <option value="{{ $provinsis->id }}">{{ $provinsis->nama_provinsi }}</option>
                @endforeach
            </select>
        </div>
    </div> 
    <div class="form-group row ">
        <div class="col-md-6">
        @if(!is_null($selectedProvinsi))
            <label for="Kota">KOTA</label>
            <select wire:model="selectedKota" class="form-control">
                <option value="" selected>PILIH KOTA</option>
                @foreach($kota as $kotas)
                    <option value="{{ $kotas->id }}">{{ $kotas->nama_kota }}</option>
                @endforeach
            </select>
        @endif
        </div>        
    </div>
    <div class="form-group row ">
        <div class="col-md-6">
        @if (!is_null($selectedKota))
            <label for="kecamatan">KECAMATAN</label>
            <select wire:model="selectedKecamatan" class="form-control">
                <option value="" selected>PILIH KECAMATAN</option>
                @foreach($kecamatan as $kecamatans)
                    <option value="{{ $kecamatans->id }}">{{ $kecamatans->nama_kecamatan }}</option>
                @endforeach
            </select>
        @endif
        </div>
    </div>
    <div class="form-group row ">
        <div class="col-md-6">
        @if (!is_null($selectedKecamatan))
            <label for="kelurahan" >KELURAHAN</label>
            <select wire:model="selectedKelurahan" class="form-control">
                <option value="" selected>PILIH KELURAHAN</option>
                @foreach($kelurahan as $kelurahans)
                    <option value="{{ $kelurahans->id }}">{{ $kelurahans->nama_kelurahan }}</option>
                @endforeach
            </select>
        @endif
        </div>
    </div>
    <div class="form-group row ">
        <div class="col-md-6">
        @if (!is_null($selectedKelurahan))
            <label for="rw" >RW</label>
            <select wire:model="selectedRw" class="form-control" name="id_rw">
                <option value="" selected>PILIH RW</option>
                @foreach($rw as $rws)
                    <option value="{{ $rws->id }}">{{ $rws->rw }}</option>
                @endforeach
            </select>
        @endif
        </div>
    </div>
</div>