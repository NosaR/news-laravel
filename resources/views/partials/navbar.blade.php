<!--header start-->
<div class="sticky-top">
    <!--Top Header-->
    <nav class="navbar" style="background-color: #fff">
        <div class="container">
            <a class="navbar-brand" href="/" class="img-fluid"><img src="./img/logo.png" alt="myway.co.id"></a>
            <form class="d-flex d-none d-lg-block d-md-block my-2 mx-2" style="width: 50%">
                <div class="input-group">
                    <input class="form-control" type="cari" placeholder="Cari Artikel" aria-label="cari" />
                    <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i
                    class="fa-solid fa-user"></i></button>
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Myway.co.id</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar">
                        <a class="nav-link text-muted" href="/masuk/redaksimyway"><i
                                class="fa-solid fa-user fa-3xl"></i>
                            Login</a>
                    </div>
                    <div class="navbar">
                        <a class="nav-link text-muted" href="/daftar_penulis"><i
                                class="fa-solid fa-user-plus fa-3xl"></i> Gabung Penulis</a>
                    </div>
                    <div class="navbar">
                        <a class="nav-link text-muted" href="/kirim_artikel"><i
                                class="fa-solid fa-newspaper fa-3xl"></i>
                            Kirim Artikel</a>
                    </div>
                    <form class="d-flex my-3 d-md-none justify-content-center">
                        <div class="input-group">
                            <input class="form-control" type="cari" placeholder="Cari Artikel" aria-label="cari" />
                            <button class="btn btn-dark" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                    <div class="text-center my-4">
                        <a class="navbar-brand" href="#" class="img-fluid"><img src="./img/logo.png"
                                alt="myway.co.id"></a>
                    </div>
                    <div class="text-center my-2">
                        <p class="">
                            <a href="#" class="align-items-center" style="color: #4267B2"><i
                                    class="fa-brands fa-square-facebook fa-2xl mx-1"></i></a>
                            <a href="#" class="align-items-center" style="color: #1DA1F2"><i
                                    class="fa-brands fa-square-twitter fa-2xl mx-1"></i></a>
                            <a href="#" class="align-items-center" style="color: #E1306C"><i
                                    class="fa-brands fa-instagram fa-2xl mx-1"></i></a>
                            <a href="#" class="align-items-center" style="color: #FF0000"><i
                                    class="fa-brands fa-youtube fa-2xl mx-1"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--Top Header end-->
    <!--top menu-->
    <nav class="bg-dark shadow-lg">
        <div class="container">
            <ul class="scrollmenu">
                <li><a href="/" class="active">home</a></li>
                <li><a href="/kategori">kategori 1</a></li>
                <li><a href="/kategori">kategori 2</a></li>
                <li><a href="/kategori">kategori 3</a></li>
                <li><a href="/kategori">kategori 4</a></li>
                <li>
                    <a class="dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Gabung Penulis
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-uppercase" style="font-size: 14px">
                        <li><a class="dropdown-item" href="/daftar_penulis">Daftar</a></li>
                        <li><a class="dropdown-item" href="/kirim_artikel">Kirim Artikel</a></li>
                    </ul>
                </li>
                <li><a href="/lainnya">lainnya</a></li>
                <li><a href="/indeks">Indeks</a></li>
            </ul>
        </div>
    </nav>
    <!--top menu end-->
</div>
<!--header end-->
