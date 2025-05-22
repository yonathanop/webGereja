            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <nav class="navbar navbar-expand-md bg-light">
                    <button class="navbar-toggler d-md-none" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu"
                        type="button" aria-controls="sidebarMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
                <div class="offcanvas-md offcanvas-start bg-body-tertiary" tabindex="-1" id="sidebarMenu"
                    aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-body d-flex flex-column p-0 pt-lg-3" style="height: 100vh;">

                        <!-- Bagian menu scrollable -->
                        <div class="flex-grow-1 overflow-auto">
                            <ul class="nav flex-column p-3">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}"
                                        aria-current="page" href="/dashboard">
                                        <svg class="bi">
                                            <use xlink:href="#house-fill"></use>
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
                                        href="/dashboard/posts">
                                        <svg class="bi">
                                            <use xlink:href="#file-earmark"></use>
                                        </svg>
                                        Buat Renungan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/kontak*') ? 'active' : '' }}"
                                        href="/dashboard/kontak">
                                        <svg class="bi">
                                            <use xlink:href="#file-earmark"></use>
                                        </svg>
                                        Kotak Masuk
                                    </a>
                                </li>
                                <!-- Tambahkan item lainnya jika perlu -->
                                <li>
                                    <form action="/logout" method="POST" class="logout-footer border-top p-3">
                                        @csrf
                                        <button type="submit"
                                            class="nav-link d-flex align-items-center gap-2 btn btn-link p-0 m-0">
                                            <svg class="bi">
                                                <use xlink:href="#door-closed"></use>
                                            </svg>
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
