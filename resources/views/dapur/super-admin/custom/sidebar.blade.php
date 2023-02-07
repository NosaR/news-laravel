        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link text-decoration-none">
                <img src="/img/favicon.png" alt="myway.co.id"
                    class="brand-image img-size-50 img-circle
                    elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Myway.co.id</span>
            </a>
            <!-- Brand Logo end-->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../img/avatar.png" alt="" class="img-circle elevation-2">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-decoration-none">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Cari"
                            aria-label="Cari">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Artikel
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="list-artikel" class="nav-link">
                                        <i class="fas fa-file nav-icon"></i>
                                        <p>Semua Artikel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="buat-artikel" class="nav-link">
                                        <i class="fas fa-edit nav-icon"></i>
                                        <p>Buat Artikel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="draft-artikel" class="nav-link">
                                        <i class="fas fa-file-contract nav-icon"></i>
                                        <p>Konsep</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="jadwal-artikel" class="nav-link">
                                        <i class="fas fa-clock nav-icon"></i>
                                        <p>Penjadwalan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-trash nav-icon"></i>
                                        <p>Sampah</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-photo-film"></i>
                                <p>
                                    Galeri
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('image.index') }}" class="nav-link">
                                        <i class="fas fa-camera nav-icon"></i>
                                        <p>Foto</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-video nav-icon"></i>
                                        <p>Video</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <div class="user-panel mt-3 pb-3 mb-3 d-flex info text-white justify-content-center">
                            <span>{{ Auth::user()->job }} Menu</span>
                        </div>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Kategori
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-user ml-2"></i>
                                <p class="ml-2">
                                    User
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-rectangle-ad ml-1"></i>
                                <p class="ml-2">
                                    Advertisement
                                </p>
                            </a>
                        </li>

                        <li class="nav-item ml-1">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-sitemap"></i>
                                <p class="ml-2">
                                    Site
                                </p>
                            </a>
                        </li>

                        <li class="nav-item ml-1">
                            <a href="#" class="nav-link">
                                <i class="fa-sharp fa-solid fa-tags ml-1"></i>
                                <p class="ml-2">
                                    Tag
                                </p>
                            </a>
                        </li>
                    </ul>


                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
