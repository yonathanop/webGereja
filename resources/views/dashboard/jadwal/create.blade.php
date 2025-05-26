@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Jadwal Baru</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/jadwal" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="informasi">Informasi Jadwal</label>
                <input type="text" class="form-control @error('informasi') is-invalid  @enderror" id="informasi"
                    name="informasi" required autofocus value="{{ old('informasi') }}">
                @error('informasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="namaPendeta">Nama Pendeta</label>
                <input type="text" class="form-control @error('namaPendeta') is-invalid  @enderror" id="namaPendeta"
                    name="namaPendeta" required autofocus value="{{ old('namaPendeta') }}">
                @error('namaPendeta')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="waktu">Waktu</label>
                <input type="datetime-local" class="form-control @error('waktu') is-invalid  @enderror" id="waktu"
                    name="waktu" required autofocus value="{{ old('waktu') }}">
                @error('waktu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan Jadwal</button>
        </form>
    </div>

@endsection
