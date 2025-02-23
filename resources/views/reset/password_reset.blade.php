@extends('layout.main')

@section('container')
    <div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-md-4">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert"
                    style="border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); background-color: #f8f9fa; width: 100%;">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin w-100 m-auto p-4"
                style="background-color: #f8f9fa; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); max-width: 330px;">
                <h2 class="h3 mb-3 fw-normal text-center">Reset Password</h2>
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                            placeholder="name@example.com" value="{{ old('email') }}" required>
                        <label for="email">Email Address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                            name="password" placeholder="Password Baru" required>
                        <label for="password">Password Baru</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Reset Password</button>
                </form>
            </main>
        </div>
    </div>
@endsection
