@extends('layouts.main')
{{-- Hero Section --}}
@section('container')
    <section id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         @foreach ($banners as $key => $bnr)
      <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
        <div class="d-flex align-items-center ratio ratio-16x9 justify-content-center text-white img-fluid"
             style="background-image: url('{{ asset('storage/' . $bnr->image) }}'); background-size: cover; background-position: center;">
        </div>
      </div>
    @endforeach
      </div>
      <!-- Chevron (prev/next) -->
      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </section>
  @endsection

  
 
