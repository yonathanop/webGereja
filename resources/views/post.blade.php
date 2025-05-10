@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>


        <p>Oleh <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>
    
    <a href="/renungan" class="d-block mt-3">Kembali ke Daftar Renungan</a>
@endsection
