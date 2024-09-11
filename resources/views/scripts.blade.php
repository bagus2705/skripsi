@extends('layout.main')

@section('container')
    <div class="container mt-2">
        <h1 class="mb-3 text-center">{{ $title }}</h1>
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Cari</h5>
                <form action="/scripts" method="GET">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="search" name="search"
                            value="{{ request('search') }}" placeholder="Search...">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Cari</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Filter</h5>
                        <form action="/scripts" method="GET">
                            <div class="mb-3">
                                <label for="category" class="form-label">Kategori</label>
                                <div class="border p-3 rounded">
                                    @foreach ($categories as $category)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category"
                                                value="{{ $category->slug }}" id="category{{ $category->id }}"
                                                onchange="this.form.submit()"
                                                {{ $category->slug == request('category') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="category{{ $category->id }}">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" value=""
                                            id="category_all" onchange="this.form.submit()"
                                            {{ !request('category') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="category_all">
                                           Semua Kategori
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <div class="border p-3 rounded">
                                    @foreach ($lokasi as $lokasi)
                                        @if ($lokasi->lokasi !== null)
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="lokasi"
                                                    value="{{ $lokasi->lokasi }}" id="lokasi{{ $lokasi->id }}"
                                                    onchange="this.form.submit()"
                                                    {{ $lokasi->lokasi == request('lokasi') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="lokasi{{ $lokasi->id }}">
                                                    {{ $lokasi->lokasi }}
                                                </label>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="lokasi" value="null"
                                            id="lokasi_null" onchange="this.form.submit()"
                                            {{ request('lokasi') === 'null' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="lokasi_null">
                                            N/A
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="lokasi" value=""
                                            id="lokasi_all" onchange="this.form.submit()"
                                            {{ !request('lokasi') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="lokasi_all">
                                            Semua Lokasi
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tahun" class="form-label">Tahun</label>
                                <div class="border p-3 rounded">
                                    @foreach ($tahun as $tahun)
                                        @if ($tahun->tahun !== null)
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tahun"
                                                    value="{{ $tahun->tahun }}" id="tahun{{ $tahun->id }}"
                                                    onchange="this.form.submit()"
                                                    {{ $tahun->tahun == request('tahun') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="tahun{{ $tahun->id }}">
                                                    {{ $tahun->tahun }}
                                                </label>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tahun" value="null"
                                            id="tahun_null" onchange="this.form.submit()"
                                            {{ request('tahun') === 'null' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="tahun_null">
                                            N/A
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tahun" value=""
                                            id="tahun_all" onchange="this.form.submit()"
                                            {{ !request('tahun') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="tahun_all">
                                            Semua Tahun
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="bahasa" class="form-label">Bahasa</label>
                                <div class="border p-3 rounded">
                                    @foreach ($bahasa as $language)
                                        @if ($language->bahasa !== null)
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bahasa"
                                                    value="{{ $language->bahasa }}" id="bahasa{{ $language->id }}"
                                                    onchange="this.form.submit()"
                                                    {{ $language->bahasa == request('bahasa') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="bahasa{{ $language->id }}">
                                                    {{ $language->bahasa }}
                                                </label>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="bahasa" value="null"
                                            id="bahasa_null" onchange="this.form.submit()"
                                            {{ request('bahasa') === 'null' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="bahasa_null">
                                            N/A
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="bahasa" value=""
                                            id="bahasa_all" onchange="this.form.submit()"
                                            {{ !request('bahasa') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="bahasa_all">
                                            Semua Bahasa
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button type="reset" class="btn btn-secondary me-2"
                                onclick="window.location.href='/scripts'">Reset</button>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="rounded-3 border p-4">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @forelse ($scripts as $script)
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title text-center ">{{ $script->title }}</h5>
                                        @if ($script->image)
                                            <img src="{{ asset('storage/' . $script->image) }}"
                                                alt="{{ $script->category->name }}" class="card-img-top img-fluid mb-3">
                                        @else
                                            <div class="text-center mb-3">
                                                <span class="text-muted">Tidak ada gambar tersedia</span>
                                            </div>
                                        @endif
                                        <h7>{{ $script->category->name }}</h7>
                                        <p class="card-text mt-3">{{ Str::limit(strip_tags($script->detail), 100) }}</p>
                                        <a href="/scripts/{{ $script->slug }}"
                                            class="btn btn-primary text-decoration-none">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center fs-4">Tidak ada naskah tersedia</p>
                        @endforelse
                    </div>

                    <div class="d-flex justify-content-end mt-3">
                        {{ $scripts->appends(request()->except('page'))->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
