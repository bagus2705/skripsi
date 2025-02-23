@extends('layout.main')

@section('container')
    <div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-md-4">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert"
                    style="border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); background-color: #f8f9fa; width: 100%;">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert"
                    style="border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); background-color: #f8f9fa; width: 100%;">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin w-100 m-auto p-4"
                style="background-color: #f8f9fa; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); max-width: 330px;">
                <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Lupa Password? <a href="/password/reset">Reset Password!</a></small>
                <small class="d-block text-center mt-3">Belum Register? <a href="/register">Register Sekarang!</a></small>
            </main>
        </div>
    </div>
@endsection
