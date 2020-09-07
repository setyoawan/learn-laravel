@extends('layout/main')
@section('title', 'App | daftar mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <h4>Daftar Mahasiswa</h4>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Nrp</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          @foreach ( $mahasiswa as $mhs)
          <tr>
            <th scope="row">{{ $loop->iteration}}</th>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->nrp}}</td>
            <td>{{$mhs->email}}</td>
            <td>{{$mhs->jurusan}}</td>
            <td>
              <a href="" class="btn btn-sm btn-warning">edit</a>
              <a href="" class="btn btn-sm btn-danger">hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection