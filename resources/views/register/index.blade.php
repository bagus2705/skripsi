@extends('layout.main')
@section('container')
    <div style="min-height: 100vh; display: flex; align-items: center; justify-content: center;">
        <div class="col-md-4">
            <main class="form-registration w-100 m-auto p-4" style="background-color: #f8f9fa; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h1 class="h3 mb-3 fw-normal text-center">Form Register </h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                         @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required >
                        <label for="password">Password</label>
                         @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Sudah Terdaftar?<a href="/login">Log In</a></small>
            </main>
        </div>
    </div>
@endsection
