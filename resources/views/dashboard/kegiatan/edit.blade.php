@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Kegiatan</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/kegiatan/{{ $kegiatan->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="informasi">Informasi Kegiatan</label>
                <input type="text" class="form-control @error('informasi') is-invalid  @enderror" id="informasi"
                    name="informasi" required autofocus value="{{ old('informasi', $kegiatan->informasi) }}">
                @error('informasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="organisasi">Organisasi</label>
                <input type="text" class="form-control @error('organisasi') is-invalid  @enderror" id="organisasi"
                    name="organisasi" required autofocus value="{{ old('organisasi', $kegiatan->organisasi) }}">
                @error('organisasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="waktu">Waktu</label>
                <input type="datetime-local" class="form-control @error('waktu') is-invalid  @enderror" id="waktu"
                    name="waktu" required autofocus value="{{ old('waktu', $kegiatan->waktu) }}">
                @error('waktu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control @error('link') is-invalid  @enderror" id="link"
                    name="link" required autofocus value="{{ old('link', $kegiatan->link) }}">
                @error('link')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pic">PIC</label>
                <input type="text" class="form-control @error('pic') is-invalid  @enderror" id="pic"
                    name="pic" required autofocus value="{{ old('pic', $kegiatan->pic) }}">
                @error('pic')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Edit Kegiatan</button>
        </form>
    </div>
@endsection
