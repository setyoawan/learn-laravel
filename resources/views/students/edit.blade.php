@extends('layout/main')
@section('title', 'App | form edit data mahasiswa')

@section('container')
<div class="container">
    <div class="row mt-4">
        <div class="col-8">
            <h4>Form Edit Data Mahasiswa</h4>
            <form action="/students/{{ $student->id }}" method="post">
                <!-- ingin mengirim method seolah olah bukan post -->
                @method('patch')
                <!-- menambah blade token csrf (cress side resource forgerry ) -->
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukkan nama" value="{{ $student->nama }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">Nrp</label>
                    <input name="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="masukkan nrp" value="{{ $student->nrp }}">
                    @error('nrp')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="masukkan email" value="{{ $student->email }}">
                    @error('email')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input name="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="masukkan jurusan" value="{{ $student->jurusan }}">
                    @error('jurusan')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
</div>
@endsection