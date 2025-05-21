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
            <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link {{ ($title === "Tentang") ? 'active' : ''}}" aria-current="page" href="/tentang">Tentang</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link {{ ($title === "Daftar Renungan") ? 'active' : ''}}" aria-current="page" href="/renungan">Renungan</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link {{ ($title === "Persembahan") ? 'active' : ''}}" aria-current="page" href="/persembahan">Persembahan</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link {{ ($title === "Kontak") ? 'active' : ''}}" aria-current="page" href="/kontak">Kontak</a>
          </li>
        </ul>
        
        <!-- Login untuk Mobile (masuk ke dalam menu utama) -->
        <ul class="navbar-nav d-lg-none ps-3">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Login") ? 'active' : ''}}" href="/login">Login</a>
          </li>
        </ul>

        <!-- Login untuk Desktop (posisi kanan) -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-none d-lg-flex">
          @auth
          <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Selamat Datang, {{ auth()->user()->name }}
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>
          @else
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Login") ? 'active' : ''}}" href="/login">Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
</nav>
