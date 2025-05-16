            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
                    aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-body d-flex flex-column p-0 pt-lg-3" style="height: 100vh;">

                        <!-- Bagian menu scrollable -->
                        <div class="flex-grow-1 overflow-auto">
                            <ul class="nav flex-column p-3">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                                        <svg class="bi">
                                            <use xlink:href="#house-fill"></use>
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts') ? 'active' : '' }}" href="/dashboard/posts">
                                        <svg class="bi">
                                            <use xlink:href="#file-earmark"></use>
                                        </svg>
                                        Hero Posts
                                    </a>
                                </li>
                                <!-- Tambahkan item lainnya jika perlu -->
                            </ul>
                        </div>

                        <!-- Bagian logout fix di bawah -->
                        <div class="logout-footer border-top p-3">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">
                                <svg class="bi">
                                    <use xlink:href="#door-closed"></use>
                                </svg>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
