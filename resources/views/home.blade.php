<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Home | GPdI House of Worship</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark"style="background-color: #0a3d62;">
      <div class="container-fluid">
        <a class="navbar-brand text-white d-flex align items-center" href="#">
          {{-- Logo --}}
          <img src="{{ asset('img/logoGPdI.jpg') }}" alt="GPdI" width="50" height="50" class="me-2">
          <div class="d-flex flex-column">
            <span class="fw-bold" style="font-size: 18px;">GPdI</span>
            <small style="font-size: 12px;">HOUSE OF WORSHIP</small>
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu Navbar --}}
        <div class="collapse navbar-collapse justify-content-lg-center w-100" id="navbarNav">
          <ul class="navbar-nav mx-auto text-start text-lg-center">
            <li class="nav-item px-3">
              <a class="nav-link active text-white" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link active text-white" aria-current="page" href="/tentang">Tentang</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link active text-white" aria-current="page" href="/renungan">Renungan</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link active text-white" aria-current="page" href="/persembahan">Persembahan</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link active text-white" aria-current="page" href="/kontak">Kontak</a>
            </li>
          </ul>
          <!-- Login untuk Mobile (masuk ke dalam menu utama) -->
          <ul class="navbar-nav d-lg-none ps-3">
            <li class="nav-item">
              <a class="nav-link active text-white" href="/login">Login</a>
            </li>
          </ul>

          <!-- Login untuk Desktop (posisi kanan) -->
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-none d-lg-flex">
            <li class="nav-item">
              <a class="nav-link active text-white" href="/login">Login</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
    <div class="text-center col-4 offset-4" >
        <h5>GPdI House of Worship Yogyakarta</h5>
    </div>

    {{-- Hero Section --}}

   <section id="hero" class="py-5" style="background-image: url('{{ asset('img/lilin.jpg') }}');">
    <div class="container text-center">
      <h1 class="display-4 fw-bold text-white">Selamat Datang di GPdI House of Worship</h1>
      <p class="lead text-white">Mari Bergabung dalam Ibadah yang tersedia sebagai berikut</p>
    </div>
   </section>
   <section id="hero1" class="py-5" style="background-image: url('{{ asset('img/hero1.png') }}');">
       </section>
       <section id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner text-center">
          <div class="carousel-item active">
            <img src="{{ asset('img/logoGPdI.jpg') }}" class="d-block mx-auto" style="max-height: 300px;" alt="slide 1">
          </div>
          <div class="carousel-item active">
            <img src="{{ asset('img/hero1.png') }}" class="d-block mx-auto" style="max-height: 300px;" alt="slide 2">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </section>
      <div class="map-responsive">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.95318567254!2d110.37032477450941!3d-7.79478157736339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a582bed009f4f%3A0x3232ac2099527f3a!2sGPdI%20Hayamwuruk!5e0!3m2!1sen!2sid!4v1745978129309!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="map-location"></iframe>
      </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
