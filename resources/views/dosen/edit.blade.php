@extends('layouts.base')

@section('title', 'Update Dosen')

@section('content')
<div class="container mt-4">

    <div class="card">
        <div class="card-header">Tambah Data</div>
        <div class="card-body">

            <form action="{{ route('dosen.update', $data->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" value="{{ $data->nama }}" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>NIDN</label>
                    <input type="text" value="{{ $data->nidn }}" name="nidn" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" id="" cols="30" rows="10">
                        {{ $data->alamat }}
                    </textarea>
                </div>

                <button class="btn btn-success">Simpan</button>
                <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>
@endsection
