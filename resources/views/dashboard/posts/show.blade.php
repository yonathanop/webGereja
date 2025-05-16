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

        <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i>Kembali ke Daftar Renungan</a>
        <a href="" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
        <a href="" class="btn btn-danger"><i class="bi bi-x-circle"></i>Delete</a>
        <p>Oleh <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>
    
    <a href="/renungan" class="d-block mt-3">Kembali ke Daftar Renungan</a>
@endsection
