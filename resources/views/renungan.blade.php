@extends('layouts.main')

@section('container')
    <h1 class="mb-5" style="text-align:center">{{ $title }}</h1>

    @if ($posts->count())
        @foreach ($posts as $post)
            <div class="card mb-3">
                @if ($post->image)
                    <div style="max-height: 200px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->title }}">
                    </div>
                @endif
                <div class="card-body">
                    <h3 class="card-title">
                        <a href="/posts/{{ $post->slug }}" class="text-dark text-decoration-none">{{ $post->title }}</a>
                    </h3>
                    <small class="text-body-secondary">
                        <p>
                            Oleh {{ $post->pendeta->namaPendeta }}
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                    </small>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center fs-4">Tidak ada renungan</p>
    @endif
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
@endsection
