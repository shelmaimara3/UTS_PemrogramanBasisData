@extends('layouts.master')
@section('container')
<h2>Edit Data Inventaris Jurusan Teknik Informatika UNESA</h2>
    <div class="container mt-4">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
              Edit Data Inventaris
          </div>
          <div class="card-body">
              <form method="POST" action="{{ route('inventaris_updated') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $inventaris->id }}">
                <div class="mb-3">
                  <label for="category">Kategori</label>
                  <select class="form-select" name="category_id" type="number">
                    @foreach($categories as $category)
                    @if(old('category_id', $category->category_id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->jenis }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->jenis }}</option>
                    @endif
                    @endforeach
                </select>
                </div>
                  <div class="mb-3">
                    <label for="lokasi">Lokasi</label>
                    <select class="form-select" name="lokasis_id" type="number">
                      @foreach($lokasis as $lokasi)
                      @if(old('lokasis_id', $lokasi->lokasis_id) == $lokasi->id)
                      <option value="{{ $lokasi->id }}" selected>Lantai {{ $lokasi->lantai }}</option>
                      @else
                      <option value="{{ $lokasi->id }}">Lantai {{ $lokasi->lantai }}</option>
                      @endif
                      @endforeach
                  </select>
                  </div>
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama', $inventaris->nama) }}">
                  </div>
                  <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <input type="text" name="kondisi" class="form-control" id="kondisi" value="{{ old('kondisi', $inventaris->kondisi) }}">
                  </div>
                  <button type="submit" class="btn btn-success">Simpan </button>
                </form>
          </div>
      </div>
      </div>
    </div>
@endsection