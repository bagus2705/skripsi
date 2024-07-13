@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12">
                <h1 class="mb-3">{{ $script->title }}</h1>
                <a href="/dashboard/scripts" class="btn btn-success">Back to Naskah</a>
                <a href="/dashboard/scripts/{{ $script->slug }}/edit" class="btn btn-warning">Edit</a>
                @can('admin')
                <form action="/dashboard/scripts/{{ $script->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure?')"> Delete</button>
                </form>
                @endcan
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                @if ($script->image)
                    <div style="max-height:350px;overflow:hidden">
                        <img src="{{ asset('storage/' . $script->image) }}" class="img-fluid mt-3">
                    </div>
                @else
                    <div class="text-center mt-3">
                        <span class="text-muted">No image available</span>
                    </div>
                @endif

                <article class="my-3 fs-5">
                    {!! $script->detail !!}
                </article>

                <h2 class="mb-4">Transkrip</h2>
                <article class="my-3 fs-5">
                    {!! $script->transkrip ?: 'N/A' !!}
                </article>

                <h2 class="mb-4">Translasi</h2>
                <article class="my-3 fs-5">
                    {!! $script->translasi ?: 'N/A' !!}
                </article>
            </div>

            <div class="col-md-4">
                <div class="author-category-box p-3 border rounded">
                    <p><strong>Author:</strong> <a class="text-decoration-none text-dark">{{ $script->pengarang ?: 'N/A' }}</a></p>
                    <p><strong>Category:</strong> <a class="text-decoration-none text-dark">{{ $script->category->name }}</a></p>
                    <p><strong>Lokasi Ditemukan:</strong> <a class="text-decoration-none text-dark">{{ $script->lokasi_ditemukan ?: 'N/A' }}</a></p>
                    <p><strong>Tahun Ditemukan:</strong> <a class="text-decoration-none text-dark">{{ $script->tahun_ditemukan ?: 'N/A' }}</a></p>
                    <p><strong>Bahasa:</strong> <a class="text-decoration-none text-dark">{{ $script->bahasa ?: 'N/A' }}</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
