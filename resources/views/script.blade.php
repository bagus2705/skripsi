@extends('layout.main')

@section('container')
    <div class="container mt-2">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10">
                <h1 class="mb-4 text-center">{{ $script->title }}</h1>
                @auth
                    @if (Auth::user()->bookmarks->contains($script->id))
                        <form action="{{ route('bookmarks.destroy', $script) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Remove Bookmark</button>
                        </form>
                    @else
                        <form action="{{ route('bookmarks.store', $script) }}" method="POST">
                            @csrf
                            <button type="submit">Bookmark</button>
                        </form>
                    @endif
                @endauth
                <div class="row">
                    <div class="col-md-8">
                        <div style="max-height:350px;overflow:hidden">
                            @if ($script->image)
                                <img src="{{ asset('storage/' . $script->image) }}" alt="{{ $script->category->name }}"
                                    class="img-fluid mt-3">
                            @else
                                <div class="text-center mt-3">
                                    <span class="text-muted">No image available</span>
                                </div>
                            @endif
                        </div>
                        <article class="my-3 fs-5">
                            {!! $script->detail !!}
                        </article>

                        <article class="my-3 fs-5">
                            <h2 class="mb-4">Transkrip</h2>
                            {!! $script->transkrip ?: 'N/A' !!}
                        </article>

                        <article class="my-3 fs-5">
                            <h2 class="mb-4">Translasi</h2>
                            {!! $script->translasi ?: 'N/A' !!}
                        </article>
                    </div>
                    <div class="col-md-4">
                        <div class="author-category-box p-3 border rounded">
                            <p><strong>Author:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->pengarang ?? 'N/A' }}</a></p>
                            <p><strong>Category:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->category->name }}</a></p>
                            <p><strong>Lokasi Ditemukan:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->lokasi_ditemukan ?? 'N/A' }}</a></p>
                            <p><strong>Tahun Ditemukan:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->tahun_ditemukan ?? 'N/A' }}</a></p>
                            <p><strong>Bahasa:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->bahasa ?? 'N/A' }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
