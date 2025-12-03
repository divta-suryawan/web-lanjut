@extends('layouts.base')

@section('title')
    Halaman Produk
@endsection

@section('content')
<div class="container mt-4">
    <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
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
                    @forelse ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->kode_produk }}</td>
                        <td>{{ $d->nama_produk }}</td>
                        <td>{{ $d->harga }}</td>
                        <td>{{ $d->deskripsi }}</td>
                        <td>
                            <a href="{{ route('produk.edit' , $d->id) }}" class="btn btn-warning">Edit</a>

                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Data Kosong</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
