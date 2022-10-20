@extends('layouts.master')
@section('container')
    <h2>Data Kategori Inventaris Jurusan Teknik Informatika UNESA</h2>
    <div class="container mt-4">
        <table class="table table-secondary table-striped mt-4">
            <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">Kode Kategori</th>
                  <th scope="col">Jenis</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($category as $key => $categories)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $categories->kode }}</td>
                  <td>{{ $categories->jenis }}</td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
@endsection