@extends('dashboard.layouts.main')
@section('container')

    <div class="container">
            <div class="row">
                <div class="col-lg-8">

                </div>
            </div>
        </div>
        <h2>{{ $banners->keterangan }}</h2>

        <a href="/dashboard/banner" class="btn btn-success"><i class="bi bi-arrow-left"></i>Daftar Banner</a>
        <a href="/dashboard/banner/{{ $banners->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
        <form action="/dashboard/banner/{{ $banners->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ?')"><i
                    class="bi bi-x-circle"></i>Delete</button>
        </form>
        @if ($banners->image)
            <div style="max-height: 500px; max-width: 500px; overflow:hidden;">
                <img src="{{ asset('storage/' . $banners->image) }}" class="img-fluid mt-3" alt="{{ $banners->title }}">
            </div>
        @endif
        <a href="/banners/{{ $banners->keterangan }}" class="text-decoration-none">{{ $banners->keterangan }}</a>
@endsection
