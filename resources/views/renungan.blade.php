<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Renungan | GPdI House of Worship</title>
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
              <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
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
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
