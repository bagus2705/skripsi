@extends('dashboard.layout.main')

@section('container')
    <div class="container mt-2">
        <h1 class="mb-3 text-center">Bookmark Anda</h1>

        @if ($bookmarks->isEmpty())
            <div class="d-flex justify-content-center align-items-center p-3 border rounded bg-light mb-4">
                <p class="text-muted text-center mb-0 fs-4">Anda tidak mempunyai naskah yang di bookmark</p>
            </div>
        @endif

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($bookmarks as $bookmark)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body d-grid align-items-center">
                            <h5 class="card-title text-center">{{ $bookmark->title }}</h5>
                            @if ($bookmark->image)
                                <img src="{{ asset('storage/' . $bookmark->image) }}" alt="{{ $bookmark->category->name }}"
                                    class="card-img-top img-fluid mb-3">
                            @else
                                <div class="d-flex justify-content-center align-items-center mb-3 p-3 border rounded bg-light" 
                                     style="height: 150px;">
                                    <span class="text-muted">Tidak ada gambar tersedia</span>
                                </div>
                            @endif
                            <h7>{{ $bookmark->category->name }}</h7>
                            <p class="card-text mt-3">{{ Str::limit(strip_tags($bookmark->detail), 100) }}</p>
                            <a href="/scripts/{{ $bookmark->slug }}" class="btn btn-primary text-decoration-none btn-block">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
