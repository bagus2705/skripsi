@extends('layout.main')

@section('container')
    <div class="container mt-2">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10">
                <h1 class="mb-4 text-center">{{ $script->title }}</h1>
                <div class="d-flex justify-content-end mb-3">
    @auth
        @if (Auth::user()->bookmarks->contains($script->id))
            <form action="{{ route('bookmarks.destroy', $script) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus Bookmark</button>
            </form>
        @else
            <form action="{{ route('bookmarks.store', $script) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Tambah Bookmark</button>
            </form>
        @endif
    @endauth
</div>

                <div class="row">
                    <div class="col-md-8">
                        <div style="max-height:350px;overflow:hidden">
                            @if ($script->image)
                                <img src="{{ asset('storage/' . $script->image) }}" alt="{{ $script->category->name }}"
                                    class="img-fluid mt-3"
                                    style="height:auto; object-fit: contain">
                            @else
                                <div class="text-center mt-3">
                                    <span class="text-muted">Tidak ada gambar tersedia</span>
                                </div>
                            @endif
                        </div>
                        <article class="my-3 fs-5">
                            {!! $script->detail !!}
                        </article>

                        <article class="my-3 fs-5">
                            <h2 class="mb-4">Transliterasi</h2>
                            {!! $script->transliterasi ?: 'N/A' !!}
                        </article>

                        <article class="my-3 fs-5">
                            <h2 class="mb-4">Translasi</h2>
                            {!! $script->translasi ?: 'N/A' !!}
                        </article>
                    </div>
                    <div class="col-md-4">
                        <div class="author-category-box p-3 border rounded">
                            <p><strong>Pengarang:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->pengarang ?? 'N/A' }}</a></p>
                            <p><strong>Kategori:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->category->name }}</a></p>
                            <p><strong>Lokasi:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->lokasi ?? 'N/A' }}</a></p>
                            <p><strong>Tahun:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->tahun ?? 'N/A' }}</a></p>
                            <p><strong>Bahasa:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->bahasa ?? 'N/A' }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
