@extends('layouts.master')
@section('container')
<h2>Tambah Data Inventaris Jurusan Teknik Informatika UNESA</h2>
    <div class="container mt-4">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
              Tambah Inventaris
          </div>
          <div class="card-body">
              <form method="POST" action="/inventaris">
                @csrf
                <div class="mb-3">
                  <label for="category">Kategori</label>
                  <select class="form-select" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->jenis }}</option>
                    @endforeach
                </select>
                </div>
                  <div class="mb-3">
                    <label for="lokasi">Lokasi</label>
                    <select class="form-select" name="lokasis_id">
                      @foreach($lokasis as $lokasi)
                      <option value="{{ $lokasi->id }}">Lantai {{ $lokasi->lantai }}</option>
                      @endforeach
                  </select>
                  </div>
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" required autofocus>
                  </div>
                  <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <input type="text" name="kondisi" class="form-control" id="kondisi" required autofocus>
                  </div>
                  <button type="submit" class="btn btn-success">Add </button>
                </form>
          </div>
      </div>
      </div>
    </div>
@endsection