@extends('layouts.base')

@section('title')
    Halaman Produk
@endsection

@section('content')
<div class="container mt-4">
    <a href="#" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pr001</td>
                        <td>Mie</td>
                        <td>15000</td>
                        <td>Ini Mie</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
