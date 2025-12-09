@extends('layouts.base')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card shadow">
                <div class="card-header text-center">
                    <strong>Login</strong>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('login.process') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"
                                   value="{{ old('email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button class="btn btn-primary w-100">Login</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
