@extends('layouts.main')
{{-- Hero Section --}}
@section('container')
    <section id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex align-items-center justify-content-center vh-100 text-white" style="background-image: url('{{ asset('img/lilin.jpg') }}'); background-size: cover; background-position: center;">          </div>
          </div>
        <div class="carousel-item">
          <div class="d-flex align-items-center justify-content-center vh-100 text-white" style="background-image: url('{{ asset('img/hero1.png') }}'); background-size: cover ; background-position: center;">
          </div>
        </div>
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

  
 
