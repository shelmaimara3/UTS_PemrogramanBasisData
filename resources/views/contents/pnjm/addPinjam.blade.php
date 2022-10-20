@extends('layouts.master')
@section('container')
<h2>Tambah Data Peminjaman Jurusan Teknik Informatika UNESA</h2>
    <div class="container mt-4">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
              Tambah Peminjaman
          </div>
          <div class="card-body">
             <!-- form yang bisa mengambil tipe data isian berupa file ataupun lainnya -->
              <form method="POST" action="/peminjaman" enctype="multipart/form-data">
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
                    <label for="nama_peminjam" class="form-label">Identitas Peminjam</label>
                    <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam" required autofocus>
                  </div>
                  <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea type="text" name="keterangan" class="form-control" id="keterangan" required autofocus></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" name="alamat" class="form-control" id="alamat" required autofocus></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telp</label>
                    <input type="text" name="no_telp" class="form-control" id="no_telp" required autofocus>
                  </div>
                  <div class="mb-3">
                    <label for="scan_ktm" class="form-label">Scan KTM</label>
                    <input class="form-control" type="file" id="scan_ktm" name="scan_ktm">
                  </div>  
                  <button type="submit" class="btn btn-success">Add </button>
                </form>
          </div>
      </div>
      </div>
    </div>
@endsection