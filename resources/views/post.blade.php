@extends('layouts.main')

@section('container')
    <article>
        <div class="container">
            <div class="row justify content-center">
                <div class="col-md-8">

                </div>
            </div>
        </div>
        <h2>{{ $post->title }}</h2>


        <p>Oleh <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></p>

        {!! $post->body !!}
    </article>
    
    <a href="/renungan" class="d-block mt-3">Kembali ke Daftar Renungan</a>
@endsection
