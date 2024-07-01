@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Script</h1>
    </div>
    <div class="col-lg 8">
        <form method="post" action="/dashboard/scripts/{{ $script->slug }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" autofocus required value="{{ old('title', $script->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    readonly value="{{ old('slug', $script->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kategori_id" class="form-label">Category</label>
                <select class="form-select" name="kategori_id">
                    @foreach ($kategoris as $kategori)
                        @if (old('kategori_id', $script->kategori_id) == $kategori->id)
                            <option value="{{ $kategori->id }}"selected>{{ $kategori->name }}</option>
                        @else
                            <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control @error('pengarang') is-invalid @enderror" id="pengarang"
                    name="pengarang"value="{{ old('pengarang', $script->pengarang) }}">
                @error('pengarang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lokasi_ditemukan" class="form-label">Lokasi Ditemukan</label>
                <input type="text" class="form-control @error('lokasi_ditemukan') is-invalid @enderror"
                    id="lokasi_ditemukan" name="lokasi_ditemukan"
                    value="{{ old('lokasi_ditemukan', $script->lokasi_ditemukan) }}">
                @error('lokasi_ditemukan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tahun_ditemukan" class="form-label">Tahun Ditemukan</label>
                <input type="text" class="form-control @error('tahun_ditemukan') is-invalid @enderror"
                    id="tahun_ditemukan" name="tahun_ditemukan"
                    value="{{ old('tahun_ditemukan', $script->tahun_ditemukan) }}">
                @error('tahun_ditemukan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bahasa" class="form-label">Bahasa Script</label>
                <input type="text" class="form-control @error('bahasa') is-invalid @enderror" id="bahasa"
                    name="bahasa" value="{{ old('bahasa', $script->bahasa) }}">
                @error('bahasa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="detail" class="form-label">Detail</label>
                @error('detail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="detail" type="hidden" name="detail"value="{{ old('detail', $script->detail) }}">
                <trix-editor input="detail"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="hidden" name="oldImage">
                @if ($script->image)
                    <img src="{{ asset('storage/' . $script->image) }}" class="img-preview img-fluid mb-3 col-sm-5">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <button type="button" class="btn btn-secondary mt-2" onclick="performOCR()">Perform OCR</button>

            </div>

            <div class="mb-3">
                <label for="transkrip" class="form-label">Transkrip</label>
                @error('transkrip')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="transkrip" type="hidden" name="transkrip"value="{{ old('transkrip', $script->transkrip) }}">
                <trix-editor input="transkrip"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="translasi" class="form-label">Translasi</label>
                @error('translasi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="translasi" type="hidden" name="translasi"value="{{ old('translasi', $script->translasi) }}">
                <trix-editor input="translasi"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Edit Script</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title.addEventListener('change', function() {
                fetch('/dashboard/scripts/checkSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
                    .catch(error => console.error('Error fetching slug:', error));
            });

            document.addEventListener('trix-file-accept', function(e) {
                e.preventDefault();
            });

            function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.img-preview');

                imgPreview.style.display = 'block';
                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);
                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                };
            }

            const imageInput = document.querySelector('#image');
            if (imageInput) {
                imageInput.addEventListener('change', previewImage);
            }
        });

        function performOCR() {
            const image = document.querySelector('#image');
            const formData = new FormData();
            formData.append('image', image.files[0]);

            const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

            fetch('/dashboard/scripts/performOCR', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.text) {
                        const transkripEditor = document.querySelector("trix-editor[input='transkrip']").editor;
                        transkripEditor.setSelectedRange([0, transkripEditor.getDocument().toString().length])
                        transkripEditor.deleteInDirection("backward")
                        transkripEditor.insertString(data.text)
                        
                        document.querySelector('#transkrip').value = data.text;
                        alert('OCR completed successfully.');
                    } else {
                        alert('OCR failed. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred during OCR processing.');
                });
        }
    </script>
@endsection
