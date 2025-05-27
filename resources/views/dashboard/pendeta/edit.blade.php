@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Pendeta</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/pendeta/{{ $pendeta->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="namaPendeta">Nama Pendeta</label>
                <input type="text" class="form-control @error('namaPendeta') is-invalid  @enderror" id="namaPendeta"
                    name="namaPendeta" required autofocus value="{{ old('namaPendeta', $pendeta->namaPendeta) }}">
                @error('namaPendeta')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Edit Pendeta</button>
        </form>
    </div>
@endsection
