@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Banner</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/banner/{{ $banner->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="keterangan">Keterangan Banner</label>
                <input type="text" class="form-control @error('keterangan') is-invalid  @enderror" id="keterangan" name="keterangan" required autofocus value="{{ old('keterangan', $banner->keterangan) }}">
                @error('keterangan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Banner</label>
                <input type="hidden" name="oldImage" value="{{ $banner->image }}">
                @if ($banner->image)
                    <img src="{{ asset('storage/'. $banner->image) }}"class="img-preview img-fluid mb-4 col-sm-5 d-block">
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
            <button type="submit" class="btn btn-primary mt-3">Edit Banner</button>
        </form>
    </div>
    <script>
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
    </script>
@endsection
