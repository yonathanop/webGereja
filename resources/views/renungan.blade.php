@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" alt="{{ $posts[0]->title }}">
            </div>
            @else
            <img src="{{ asset('img/404.png') }}" class="card-img-top" alt="..." style="width:1200px; height:400px;">
        @endif
            <div class="card-body">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-dark text-decoration-none">{{ $posts[0]->title }}</a></h3>
                <small class="text-body-secondary">
                <p>Oleh <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/renungan/{{ $posts[0]->slug }}" class="tex-decoration-none btn btn-primary">Baca Selengkapnya</a>
                </div>
        </div>
    @else
        <p class="text-center fs-4">Tidak ada renungan</p>
    @endif

    @foreach ($posts->skip(1) as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
        @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->title }}">
        @endif
        @if ($post->author)
            <p>Oleh <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->username }}</a>
        </p>
        @else
            <span class="text-decoration-none">Penulis tidak diketahui</span>
        @endif
        
        
        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Baca Selengkapnya</a>
    </article>
       
    @endforeach
@endsection
