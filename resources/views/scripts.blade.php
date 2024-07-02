@extends('layout.main')

@section('container')
    <div class="container mt-2">
        <h1 class="mb-3 text-center">{{ $title }}</h1>

        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Search</h5>
                        <form action="/scripts" method="GET">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="search" name="search"
                                    value="{{ request('search') }}" placeholder="Search...">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Search</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Filter</h5>
                        <form action="/scripts" method="GET">
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
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
                                            All Categories
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi_ditemukan" class="form-label">Location Found</label>
                                <div class="border p-3 rounded">
                                    @foreach ($lokasi_ditemukan as $lokasi)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="lokasi_ditemukan"
                                                value="{{ $lokasi->lokasi_ditemukan }}"
                                                id="lokasi_ditemukan{{ $lokasi->id }}" onchange="this.form.submit()"
                                                {{ $lokasi->lokasi_ditemukan == request('lokasi_ditemukan') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="lokasi_ditemukan{{ $lokasi->id }}">
                                                {{ $lokasi->lokasi_ditemukan }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="lokasi_ditemukan" value=""
                                            id="lokasi_ditemukan_all" onchange="this.form.submit()"
                                            {{ !request('lokasi_ditemukan') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="lokasi_ditemukan_all">
                                            All Locations
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tahun_ditemukan" class="form-label">Year Found</label>
                                <div class="border p-3 rounded">
                                    @foreach ($tahun_ditemukan as $tahun)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tahun_ditemukan"
                                                value="{{ $tahun->tahun_ditemukan }}"
                                                id="tahun_ditemukan{{ $tahun->id }}" onchange="this.form.submit()"
                                                {{ $tahun->tahun_ditemukan == request('tahun_ditemukan') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="tahun_ditemukan{{ $tahun->id }}">
                                                {{ $tahun->tahun_ditemukan }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tahun_ditemukan" value=""
                                            id="tahun_ditemukan_all" onchange="this.form.submit()"
                                            {{ !request('tahun_ditemukan') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="tahun_ditemukan_all">
                                            All Years
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="bahasa" class="form-label">Language</label>
                                <div class="border p-3 rounded">
                                    @foreach ($bahasa as $language)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bahasa"
                                                value="{{ $language->bahasa }}" id="bahasa{{ $language->id }}"
                                                onchange="this.form.submit()"
                                                {{ $language->bahasa == request('bahasa') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="bahasa{{ $language->id }}">
                                                {{ $language->bahasa }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="bahasa" value=""
                                            id="bahasa_all" onchange="this.form.submit()"
                                            {{ !request('bahasa') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="bahasa_all">
                                            All Languages
                                        </label>
                                    </div>
                                </div>
                            </div>
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
                                        <h5 class="card-title">{{ $script->title }}</h5>
                                        <img src="{{ asset('storage/' . $script->image) }}"
                                            alt="{{ $script->category->name }}" class="card-img-top img-fluid mb-3">
                                        <h7>{{ $script->category->name}}</h7>
                                        <p class="card-text mt-3">{{ Str::limit(strip_tags($script->detail), 100) }}</p>
                                        <a href="/scripts/{{ $script->slug }}"
                                            class="btn btn-primary text-decoration-none">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center fs-4">No scripts found.</p>
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
