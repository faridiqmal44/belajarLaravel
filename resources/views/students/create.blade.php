@extends('layout/main')

@section('title', 'Tambah Data Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="my-3">Tambah Data Student</h1>
            <form action="/students" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukan nrp" name="nrp" value="{{ old('nrp') }}">
                    @error('nrp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukan email" name="email">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukan jurusan" name="jurusan">
                </div>
                <button type="submit" class="btn btn-primary btn-sm my-3">Simpan</button>
                <a href="/students" class="card-link">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection