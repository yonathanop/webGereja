            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div class="offcanvas-md offcanvas-start bg-body-tertiary" tabindex="-1" id="sidebarMenu"
                    aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-body d-flex flex-column p-0 pt-lg-3" style="height: 100vh;">

                        <!-- Bagian menu scrollable -->
                        <div class="flex-grow-1 overflow-auto">
                            <ul class="nav flex-column p-3">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}"
                                        aria-current="page" href="/dashboard">
                                        <i class="bi bi-house-door-fill"></i>
                                        Dashboard
                                    </a>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/banner*') ? 'active' : '' }}"
                                        href="/dashboard/banner">
                                        <i class="bi bi-upload"></i>
                                        Menambah Banner
                                    </a>
                                </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
                                        href="/dashboard/posts">
                                        <i class="bi bi-file-earmark-plus-fill"></i>
                                        Buat Renungan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/kontak*') ? 'active' : '' }}"
                                        href="/dashboard/kontak">
                                        <i class="bi bi-envelope-open"></i>
                                        Kotak Masuk
                                    </a>
                                </li>
                                <!-- Tambahkan item lainnya jika perlu -->
                                <li>
                                    <form action="/logout" method="POST" class="logout-footer border-top p-3">
                                        @csrf
                                        <button type="submit"
                                            class="nav-link d-flex align-items-start gap-2 btn btn-link p-0 m-0">
                                            <i class="bi bi-box-arrow-left p+3"></i>
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
