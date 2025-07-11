@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Renungan</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="title">Judul Renungan</label>
                <input type="text" class="form-control @error('title') is-invalid  @enderror" id="title" name="title" required value="{{ old('title', $post->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid  @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pendeta_id">Pendeta</label>
                <select class="form-select" name="pendeta_id">
                    @foreach ($pendeta as $pdt)
                    @if(old('pendeta_id', $post->pendeta) == $pdt->id)
                        <option value="{{ $pdt->id }}" selected>{{ $pdt->namaPendeta }}</option>
                    @else
                        <option value="{{ $pdt->id }}">{{ $pdt->namaPendeta }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Ilustrasi</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if ($post->image)
                    <img src="{{ asset('storage/'. $post->image) }}"class="img-preview img-fluid mb-4 col-sm-5 d-block">
                    @else
                    <img class="img-preview img-fluid mb-4 col-sm-5">
                @endif
                <input class="form-control @error('image') is-invalid  @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Text Renungan</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>


            <button type="submit" class="btn btn-primary mt-3">Edit Renungan</button>
        </form>
    </div>
    <script>
        function previewImage() {
            console.log('Preview image dipanggil!');
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
        const title = document.querySelector('#title')
        const slug = document.querySelector('#slug')

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        //Disable trix file upload
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })
    });
    </script>
@endsection
