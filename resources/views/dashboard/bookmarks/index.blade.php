@extends('dashboard.layout.main')

@section('container')
    <div class="container mt-2">
        <h1 class="mb-3 text-center">Your Bookmarks</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($bookmarks as $bookmark)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $bookmark->script->title }}</h5>
                            @if ($bookmark->script->image)
                                <img src="{{ asset('storage/' . $bookmark->script->image) }}" alt="{{ $bookmark->script->category->name }}"
                                    class="card-img-top img-fluid mb-3">
                            @else
                                <div class="text-center mb-3">
                                    <span class="text-muted">No image available</span>
                                </div>
                            @endif
                            <h7>{{ $bookmark->script->category->name }}</h7>
                            <p class="card-text mt-3">{{ Str::limit(strip_tags($bookmark->script->detail), 100) }}</p>
                            <a href="/scripts/{{ $bookmark->script->slug }}"                                class="btn btn-primary text-decoration-none">Read More</a>
                            <form action="{{ route('bookmarks.destroy', $bookmark->id) }}" method="POST" class="float-end mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Remove Bookmark</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center fs-4">You have no bookmarks.</p>
            @endforelse
        </div>

        <div class="d-flex justify-content-end mt-3">
            {{-- Pagination links if needed --}}
        </div>
    </div>
@endsection
