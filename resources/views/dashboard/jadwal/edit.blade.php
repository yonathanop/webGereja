@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Jadwal</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/jadwal/{{ $jadwal->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="informasi">Informasi Jadwal</label>
                <input type="text" class="form-control @error('informasi') is-invalid  @enderror" id="informasi"
                    name="informasi" required autofocus value="{{ old('informasi', $jadwal->informasi) }}">
                @error('informasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pendeta_id">Nama Pendeta</label>
                <select name="pendeta_id" id="pendeta_id" class="form-control @error('pendeta_id') is-invalid @enderror"
                    required>
                    <option value="">Pilih Pendeta</option>
                    @foreach ($namaPendeta as $pendeta)
                        <option value="{{ $pendeta->id }}"
                            {{ old('pendeta_id', $jadwal->pendeta_id) == $pendeta->id ? 'selected' : '' }}>
                            {{ $pendeta->namaPendeta }}
                        </option>
                    @endforeach
                </select>
                @error('pendeta_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="waktu">Waktu</label>
                <input type="datetime-local" class="form-control @error('waktu') is-invalid  @enderror" id="waktu"
                    name="waktu" required autofocus value="{{ old('waktu', $jadwal->waktu) }}">
                @error('waktu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Edit Jadwal</button>
        </form>
    </div>
@endsection
