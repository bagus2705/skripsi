@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Naskah Baru</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/scripts" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul <span class="text-danger">*</span> </label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" autofocus required value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    readonly>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Kategori <span class="text-danger">*</span></label>
                <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control @error('pengarang') is-invalid @enderror" id="pengarang"
                    name="pengarang" value="{{ old('pengarang') }}">
                @error('pengarang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror"
                    id="lokasi" name="lokasi" value="{{ old('lokasi') }}">
                @error('lokasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" class="form-control @error('tahun') is-invalid @enderror"
                    id="tahun" name="tahun" value="{{ old('tahun') }}">
                @error('tahun')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bahasa" class="form-label">Bahasa Naskah</label>
                <input type="text" class="form-control @error('bahasa') is-invalid @enderror" id="bahasa"
                    name="bahasa" value="{{ old('bahasa') }}">
                @error('bahasa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label">Detail <span class="text-danger">*</span></label>
                <input id="detail" type="hidden" name="detail" value="{{ old('detail') }}">
                <trix-editor input="detail"></trix-editor>
                @error('detail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <button type="button" class="btn btn-secondary mt-2" onclick="performOCR()">Perform OCR for Transliterasi</button>
            </div>
            <div class="mb-3">
                <label for="transliterasi" class="form-label">Transliterasi</label>
                <input id="transliterasi" type="hidden" name="transliterasi" value="{{ old('transliterasi') }}">
                <trix-editor input="transliterasi"></trix-editor>
                @error('transliterasi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="translasi" class="form-label">Translasi</label>
                <input id="translasi" type="hidden" name="translasi" value="{{ old('translasi') }}">
                <trix-editor input="translasi"></trix-editor>
                @error('translasi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Buat Naskah</button>
        </form>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        function generateSlug() {
            fetch('/dashboard/scripts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
                .catch(error => console.error('Error fetching slug:', error));
        }

        title.addEventListener('change', generateSlug);
        title.addEventListener('blur', generateSlug);

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

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
                        const transliterasiEditor = document.querySelector("trix-editor[input='transliterasi']").editor;
                        transliterasiEditor.setSelectedRange([0, transliterasiEditor.getDocument().toString().length])
                        transliterasiEditor.deleteInDirection("backward")
                        transliterasiEditor.insertString(data.text)

                        document.querySelector('#transliterasi').value = data.text;
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
