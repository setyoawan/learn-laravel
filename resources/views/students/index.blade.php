@extends('layout/main')
@section('title', 'App | daftar mahasiswa')

@section('container')
<div class="container">
    <div class="row mt-4">
        <div class="col-6">
            <h4>Daftar Mahasiswa</h4>

            <a href="/students/create" class="btn btn-primary my-3">Tambah Data</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <ul class="list-group">
                @foreach ($students as $stud)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $stud->nama }}
                    <a href="/students/{{ $stud->id }}" class="badge badge-info">details</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection