@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat Datang</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Peran Anda
                </div>
                <div class="card-body">
                    <h6 class="card-text">{{ auth()->user()->role }}</p>
                </div>
            </div>
        </div>
        @can('admin')
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Aksi
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kelola Naskah</h5>
                        <p class="card-text">Lihat dan kelola semua naskah di sini</p>
                        <a href="/dashboard/scripts" class="btn btn-primary">Lihat Naskah</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-header">
                        Aksi
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kelola Kategori</h5>
                        <p class="card-text">Lihat dan kelola semua kategori di sini</p>
                        <a href="/dashboard/categories" class="btn btn-primary">Lihat Kategori</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-header">
                        Aksi
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kelola Pengguna</h5>
                        <p class="card-text">Lihat dan kelola semua pengguna di sini</p>
                        <a href="/dashboard/users" class="btn btn-primary">Lihat Pengguna</a>
                    </div>
                </div>
            </div>
        @endcan
    </div>
@endsection
