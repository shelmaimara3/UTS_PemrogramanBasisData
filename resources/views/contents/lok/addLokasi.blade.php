@extends('layouts.master')
@section('container')
<h2>Tambah Data Lokasi Jurusan Teknik Informatika UNESA</h2>
    <div class="container mt-4">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
              Tambah Lokasi
          </div>
          <div class="card-body">
              <form method="POST" action="/lokasi">
                @csrf
                <div class="mb-3">
                  <label for="inventaris_id">Nama Inventaris</label>
                  <select class="form-select" name="inventaris_id">
                    @foreach($inventaris as $inv)
                    <option value="{{ $inv->id }}">{{ $inv->nama }}</option>
                    @endforeach
                </select>
                </div>
                  <div class="mb-3">
                    <label for="nama_ruang" class="form-label">Nama Ruang</label>
                    <input type="text" name="nama_ruang" class="form-control" id="nama_ruang" required autofocus>
                  </div>
                  <div class="mb-3">
                    <label for="lantai" class="form-label">Lantai</label>
                    <input type="number" name="lantai" class="form-control" id="lantai" placeholder="masukkan angka" required autofocus>
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" required autofocus></textarea>
                  </div>
                  <button type="submit" class="btn btn-success">Add </button>
                </form>
          </div>
      </div>
      </div>
    </div>
@endsection