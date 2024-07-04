@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Naskah</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/scripts" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" autofocus required value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    readonly>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
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
                <label for="lokasi_ditemukan" class="form-label">Lokasi Ditemukan</label>
                <input type="text" class="form-control @error('lokasi_ditemukan') is-invalid @enderror"
                    id="lokasi_ditemukan" name="lokasi_ditemukan" value="{{ old('lokasi_ditemukan') }}">
                @error('lokasi_ditemukan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tahun_ditemukan" class="form-label">Tahun Ditemukan</label>
                <input type="text" class="form-control @error('tahun_ditemukan') is-invalid @enderror"
                    id="tahun_ditemukan" name="tahun_ditemukan" value="{{ old('tahun_ditemukan') }}">
                @error('tahun_ditemukan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bahasa" class="form-label">Bahasa Script</label>
                <input type="text" class="form-control @error('bahasa') is-invalid @enderror" id="bahasa"
                    name="bahasa" value="{{ old('bahasa') }}">
                @error('bahasa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label">Detail</label>
                <input id="detail" type="hidden" name="detail" value="{{ old('detail') }}">
                <trix-editor input="detail"></trix-editor>
                @error('detail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <button type="button" class="btn btn-secondary mt-2" onclick="performOCR()">Perform OCR for Transkrip</button>
            </div>
            <div class="mb-3">
                <label for="transkrip" class="form-label">Transkrip</label>
                <input id="transkrip" type="hidden" name="transkrip" value="{{ old('transkrip') }}">
                <trix-editor input="transkrip"></trix-editor>
                @error('transkrip')
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
            <button type="submit" class="btn btn-primary">Create Naskah</button>
        </form>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/scripts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })

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
