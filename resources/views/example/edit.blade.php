@extends('layouts.base')

@section('title', 'Edit Data')

@section('content')
<div class="container mt-4">

    <div class="card">
        <div class="card-header">Edit Data</div>
        <div class="card-body">

            <form action="{{ route('example.update', $data->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ $data->email }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="{{ $data->alamat }}" class="form-control" required>
                </div>

                <button class="btn btn-success">Update</button>
                <a href="{{ route('example.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>
@endsection
