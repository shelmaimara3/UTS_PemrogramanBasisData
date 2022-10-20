@extends('layouts.master')
@section('container')
    <h2>Data Peminjaman Inventaris Jurusan Teknik Informatika UNESA</h2>
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="container mt-4">
        <a href="/addPinjam" class="btn btn-primary">[+] Tambah Data</a>
        <table class="table table-secondary table-striped mt-4">
            <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">Identitas Peminjam</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No. Telp</th>
                  <th scope="col">Scan KTM</th>
                  <th scope="col">Kode Inventaris</th>
                  <th scope="col">Waktu Pinjam</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($peminjaman as $key => $p)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $p->nama_peminjam }}</td>
                  <td>{{ $p->keterangan }}</td>
                  <td>{{ $p->alamat }}</td>
                  <td>{{ $p->no_telp }}</td>
                  <td>{{ $p->scan_ktm }}</td>
                  <td>{{ $p->inventaris_id }}</td>
                  <td>{{ $p->created_at }}</td>
                  <td>
                    <a href="/delete-peminjaman/{{ $p->id }}" type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus?')">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
    
@endsection