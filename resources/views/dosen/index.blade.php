@extends('layouts.base')
@section('title')
    Halaman Dosen
@endsection
@section('content')

<div class="container mt-4">
    <a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIDN</th>
                        <th>Alamat</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->nidn }}</td>
                        <td>{{ $d->alamat }}</td>
                       <td>
                            <a href="{{ route('dosen.edit', $d->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('dosen.delete', $d->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Tidak ada data</td>
                    </tr>
                @endforelse

                </tbody>


            </table>
        </div>
    </div>
</div>

@endsection


