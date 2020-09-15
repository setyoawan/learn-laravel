@extends('layout/main')
@section('title', 'App | detail mahasiswa')

@section('container')
<div class="container">
    <div class="row mt-4">
        <div class="col-6">
            <h4>Daftar Mahasiswa</h4>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> {{ $student->nama }} </h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
                    <p class="card-text">{{ $student->email }}</p>
                    <p class="card-text">{{ $student->jurusan }}</p>

                    <a href="/students" class="card-link btn btn-warning">kembali</a>
                    <A href="{{ $student->id }}/edit" class="btn btn-primary">Edit</A>
                    <form action="{{ $student->id }}" method="post" class="d-inline">
                        <!-- supaya pada url tidak dapat di ketik 'delete/id', akan tiba tiba kehapus datanya -->
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection