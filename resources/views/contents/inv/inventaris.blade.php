@extends('layouts.master')
@section('container')
    <h2>Data Inventaris Jurusan Teknik Informatika UNESA</h2>
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="container mt-4">
        <a href="/addInv" class="btn btn-primary">[+] Tambah Data</a>
        <table class="table table-secondary table-striped mt-4">
            <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Kondisi</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($inventaris as $key => $inv)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $inv->nama }}</td>
                  <td>{{ $inv->kondisi }}</td>
                  <td>
                    <a href="/show-inv/{{ $inv->id }}" type="submit" class="btn btn-outline-info btn-sm">Detail</a>
                    <a href="/edit-inv/{{ $inv->id }}" type="submit" class="btn btn-outline-warning btn-sm">Edit</a>
                    <a href="/delete-inv/{{ $inv->id }}" type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus?')">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
@endsection