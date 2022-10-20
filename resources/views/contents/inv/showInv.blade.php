@extends('layouts.master')
@section('container')
<h2>Detail Inventaris Jurusan Teknik Informatika UNESA</h2>
    <div class="container mt-4">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
              Detail Inventaris
          </div>
          <div class="card-body">
                <div class="mb-3">
                  <label for="category">Kategori</label>
                    <input type="text" name="category_id" class="form-control" id="category_id" value="{{ old('category_id', $inventaris->category_id) }}" readonly>
                </div>
                  <div class="mb-3">
                    <label for="lokasis_id">Lokasi</label>
                    <input type="text" name="lokasis_id" class="form-control" id="lokasis_id" value="{{ old('lokasis_id', $inventaris->lokasis_id) }}" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama', $inventaris->nama) }}" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <input type="text" name="kondisi" class="form-control" id="kondisi" value="{{ old('kondisi', $inventaris->kondisi) }}" readonly>
                  </div>
          </div>
      </div>
      </div>
    </div>
@endsection