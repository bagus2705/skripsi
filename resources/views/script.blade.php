@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $script->title }}</h1>

                <div class="row">
                    <div class="col-md-8">
                        <div style="max-height:350px;overflow:hidden">
                            <img src="{{ asset('storage/' . $script->image) }}" alt="{{ $script->category->name }}"
                                class="img-fluid mt-3">
                        </div>
                        <article class="my-3 fs-5">
                            {!! $script->detail !!}
                        </article>

                        <article class="my-3 fs-5">
                            <h2 class="mb-4">Transkrip</h2>
                            {!! $script->transkrip !!}
                        </article>
                        <article class="my-3 fs-5">
                            <h2 class="mb-4">Translasi</h2>
                            {!! $script->translasi !!}
                        </article>
                    </div>
                    <div class="col-md-4">
                        <div class="author-category-box p-3 border rounded">
                            <p><strong>Author:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->pengarang }}</a></p>
                            <p><strong>Category:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->category->name }}</a></p>
                            <p><strong>Lokasi Ditemukan:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->lokasi_ditemukan }}</a></p>
                            <p><strong>Tahun Ditemukan:</strong> <a
                                    class="text-decoration-none text-dark">{{ $script->tahun_ditemukan }}</a></p>
                            <p><strong>Bahasa:</strong> <a class="text-decoration-none text-dark">{{ $script->bahasa }}</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
