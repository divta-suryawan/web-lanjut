@extends('layouts.base')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="container mt-4">

    <a href="{{ route('example.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>
                            <a href="{{ route('example.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('example.delete', $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Data masih kosong</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
