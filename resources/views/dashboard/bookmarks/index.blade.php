@extends('dashboard.layout.main')

@section('container')
    <div class="container mt-2">
        <h1 class="mb-3 text-center">Your Bookmarks</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($bookmarks as $bookmark)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body d-grid align-items-center">
                            <h5 class="card-title text-center">{{ $bookmark->title }}</h5>
                            @if ($bookmark->image)
                                <img src="{{ asset('storage/' . $bookmark->image) }}" alt="{{ $bookmark->category->name }}"
                                    class="card-img-top img-fluid mb-3">
                            @else
                                <div class="text-center mb-3">
                                    <span class="text-muted">No image available</span>
                                </div>
                            @endif
                            <h7>{{ $bookmark->category->name }}</h7>
                            <p class="card-text mt-3">{{ Str::limit(strip_tags($bookmark->detail), 100) }}</p>
                            <a href="/scripts/{{ $bookmark->slug }}" class="btn btn-primary text-decoration-none btn-block">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center fs-4">You have no bookmarks.</p>
            @endforelse
        </div>
    </div>
@endsection
