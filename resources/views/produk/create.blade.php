@extends('layouts.base')

@section('title', 'Tambah Data')

@section('content')
<div class="container mt-4">

    <div class="card">
        <div class="card-header">Tambah Data</div>
        <div class="card-body">

            <form action="{{ route('produk.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label>Kode Produk</label>
                    <input type="text" name="kode_produk" id="kode_produk" class="form-control" required>
                </div>
                 <div class="mb-3">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" class="form-control" required>
                </div>
                 <div class="mb-3">
                    <label>Harga</label>
                    <input type="text" name="harga" id="harga" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <button class="btn btn-success">Simpan</button>
                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>
@endsection
