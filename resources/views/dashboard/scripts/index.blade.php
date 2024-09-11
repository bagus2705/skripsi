@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Naskah</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive col-lg-8">
        @can('admin')
            <a href="/dashboard/scripts/create" class="btn btn-primary mb-3">Buat Naskah Baru</a>
        @endcan
        <form action="/dashboard/scripts" method="GET" class="col-lg-6 mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari nama naskah"
                    value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scripts as $script)
                    <tr>
                        <td>{{ $script->id }}</td>
                        <td>{{ $script->title }}</td>
                        <td>{{ $script->category->name }}</td>
                        <td><a href="/dashboard/scripts/{{ $script->slug }}/edit" class="badge bg-warning"> Ubah</a></td>
                        @can('admin')
                            <td>

                                <form action="/dashboard/scripts/{{ $script->slug }}" method="post"class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0 "onclick="return confirm('Apakah anda yakin?')">
                                        Hapus</a>
                                    </button>
                                </form>
                            </td>
                        @endcan
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-3">
            {{ $scripts->appends(request()->except('page'))->links() }}
        </div>
    </div>
@endsection
