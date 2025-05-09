@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>


        <p>Oleh Yonathan Okta kategori <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>
    
    <a href="/renungan">Kembali ke Daftar Renungan</a>
@endsection
