@extends('layouts.master')
@section('container')
    <h2>Data Lokasi Inventaris Jurusan Teknik Informatika UNESA</h2>
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="container mt-4">
        <a href="/addLokasi" class="btn btn-primary">[+] Tambah Data</a>
        <table class="table table-secondary table-striped mt-4">
            <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">Nama Ruang</th>
                  <th scope="col">Lantai</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($lokasi as $key => $l)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $l->nama_ruang }}</td>
                  <td>{{ $l->lantai }}</td>
                  <td>{{ $l->deskripsi }}</td>
                  <td>
                    <a href="/edit-lokasi/{{ $l->id }}" type="submit" class="btn btn-outline-warning btn-sm">Edit</a>
                    <a href="/delete-lokasi/{{ $l->id }}" type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus?')">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
    
@endsection