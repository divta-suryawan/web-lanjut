@extends('layouts.base')

@section('title', 'Tambah Data')

@section('content')
<div class="container mt-4">

    <div class="card">
        <div class="card-header">Tambah Data</div>
        <div class="card-body">

            <form action="{{ route('example.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>

                <button class="btn btn-success">Simpan</button>
                <a href="{{ route('example.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>
@endsection
