@extends('dashboard.layouts.main')
@section('container')
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                </div>
            </div>
        </div>
        <h2>{{ $post->title }}</h2>

        <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i>Daftar Renungan</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ?')"><i
                    class="bi bi-x-circle"></i>Delete</button>
        </form>
        @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="{{ $post->title }}">
            </div>
        @endif
        <p>Oleh <a href="/pendeta/{{ $post->pendeta->namaPendeta }}" class="text-decoration-none">{{ $post->pendeta->namaPendeta }}</a>

            {!! $post->body !!}
    </article>
@endsection
