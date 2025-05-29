@extends('layouts.main')

@section('container')
    <article>
        <h2 style="text-align:center">{{ $post->title }}</h2>


        <p>Oleh {{ $post->pendeta->namaPendeta }} Pada {{ $post->created_at->timezone('Asia/Jakarta')->locale('id')->isoFormat('dddd, D MMMM Y') }}</p>
     

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->title }}">
            </div>
        @endif

        <div class="post-body" style="text-align:justify">{!! $post->body !!}</div>
    </article>

    <a href="/renungan" class="d-block mt-3">Kembali ke Daftar Renungan</a>
@endsection
