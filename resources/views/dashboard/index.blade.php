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
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">
                    Jumlah Naskah
                </div>
                <div class="card-body text-center">
                    <h1>{{ $scriptCount }}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">
                    Jumlah Kategori
                </div>
                <div class="card-body text-center">
                    <h1>{{ $categoryCount }}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">
                    Jumlah Bookmark Saya
                </div>
                <div class="card-body text-center">
                    <h1>{{ $bookmarkCount }}</h1>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    Bookmark Saya
                </div>
                <div class="card-body">
                    <h5 class="card-title">Aksi</h5>
                    <p class="card-text">Lihat daftar naskah yang Anda tandai sebagai favorit.</p>
                    <a href="/dashboard/bookmarks" class="btn btn-primary">Lihat Bookmark</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    Lihat Naskah
                </div>
                <div class="card-body">
                    <h5 class="card-title">Aksi</h5>
                    <p class="card-text">Lihat daftar naskah.</p>
                    <a href="/scripts" class="btn btn-primary">Lihat Naskah</a>
                </div>
            </div>
        </div>

        @can('filologis')
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        Kelola Naskah
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Aksi</h5>
                        <p class="card-text">Lihat dan kelola semua naskah di sini.</p>
                        <a href="/dashboard/scripts" class="btn btn-primary">Kelola Naskah</a>
                    </div>
                </div>
            </div>
        @endcan

        @can('admin')
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">
                        Aksi Admin
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Kelola Data</h5>
                        <p class="card-text">Pilih salah satu aksi di bawah:</p>
                        <div class="d-grid gap-2">
                            <a href="/dashboard/scripts" class="btn btn-primary">Kelola Naskah</a>
                            <a href="/dashboard/categories" class="btn btn-secondary">Kelola Kategori</a>
                            <a href="/dashboard/users" class="btn btn-success">Kelola User</a>
                        </div>
                    </div>
                </div>
            </div>
        @endcan
    </div>
@endsection
