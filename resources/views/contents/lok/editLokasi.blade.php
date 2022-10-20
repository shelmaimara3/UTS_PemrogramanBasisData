@extends('layouts.master')
@section('container')
<h2>Edit Data Lokasi Jurusan Teknik Informatika UNESA</h2>
    <div class="container mt-4">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
              Edit Lokasi
          </div>
          <div class="card-body">
              <form method="POST" action="{{ route('lokasi_updated') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $lokasi->id }}">
                <div class="mb-3">
                  <label for="inventaris_id">Nama Inventaris</label>
                  <select class="form-select" name="inventaris_id" type="number">
                    @foreach($inventaris as $inv)
                    @if(old('inventaris_id', $inv->inventaris_id) == $inv->id)
                    <option value="{{ $inv->id }}" selected>{{ $inv->nama }}</option>
                    @else
                    <option value="{{ $inv->id }}">{{ $inv->nama }}</option>
                    @endif
                    @endforeach
                </select>
                </div>
                  <div class="mb-3">
                    <label for="nama_ruang" class="form-label">Nama Ruang</label>
                    <input type="text" name="nama_ruang" class="form-control" id="nama_ruang" value="{{ old('nama_ruang', $lokasi->nama_ruang) }}">
                  </div>
                  <div class="mb-3">
                    <label for="lantai" class="form-label">Lantai</label>
                    <input type="number" name="lantai" class="form-control" id="lantai" placeholder="masukkan angka" value="{{ old('lantai', $lokasi->lantai) }}">
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{ old('deskripsi', $lokasi->deskripsi) }}">
                  </div>
                  <button type="submit" class="btn btn-success">Simpan </button>
                </form>
          </div>
      </div>
      </div>
    </div>
@endsection