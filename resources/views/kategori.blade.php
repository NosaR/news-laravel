@extends('layouts.main')
@section('container')
    <!--content-->
    <div class="row my-2">
        <div class="col-md-8">

            <!--carousel-->
            <div id="carouselCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/content.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption">
                            <h6><a class="link text-decoration-none text-white" href="#">JUDUL ARTIKEL HEADLINE
                                    1</a></h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./img/content.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption ">
                            <h6><a class="link text-decoration-none text-white" href="#">JUDUL ARTIKEL HEADLINE
                                    2</a></h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./img/content.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption ">
                            <h6><a class="link text-decoration-none text-white" href="#">JUDUL ARTIKEL HEADLINE
                                    3</a></h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./img/content.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption ">
                            <h6><a class="link text-decoration-none text-white" href="#">JUDUL ARTIKEL HEADLINE
                                    4</a></h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./img/content.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption ">
                            <h6><a class="link text-decoration-none text-white" href="#">JUDUL ARTIKEL HEADLINE
                                    5</a></h6>
                        </div>
                    </div>
                    <div class="position-absolute px-3 py-3 text-white fw-bold"
                        style="background-color: rgba(0, 0, 0, 0.7)">
                        HEADLINE</div>
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
            <!--carousel end-->

            <!--advertisement-->
            <div class="col">
                <div class="text-center my-3 fw-bold" style="background-color: rgba(210, 210, 210, 0.803)">
                    <small>advertisement</small>
                    <div>
                        <img src="./img/ads/afterheadline-ads.jpg" class="img-fluid mb-3" alt="" />
                    </div>
                </div>
            </div>
            <!--advertisement end-->

            <div class="col my-2">
                <h4>ARTIKEL KATEGORI</h4>
            </div>
            <div class="">
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 1</a>
                        </h5>
                        <p><small class="text-muted">5 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 2</a>
                        </h5>
                        <p><small class="text-muted">10 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 3</a>
                        </h5>
                        <p><small class="text-muted">29 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 4</a>
                        </h5>
                        <p><small class="text-muted">46 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 5</a>
                        </h5>
                        <p><small class="text-muted">51 menit yang
                                lalu</small></p>
                    </div>
                </div>
            </div>
            <!--advertisement-->
            <div class="col">
                <div class="text-center my-3 fw-bold" style="background-color: rgba(210, 210, 210, 0.803)">
                    <small>advertisement</small>
                    <div>
                        <img src="./img/ads/homepage1-ads.jpg" class="img-fluid mb-3" alt="" />
                    </div>
                </div>
            </div>
            <!--advertisement end-->
            <div class="mb-3">
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 6</a>
                        </h5>
                        <p><small class="text-muted">5 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 7</a>
                        </h5>
                        <p><small class="text-muted">10 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 8</a>
                        </h5>
                        <p><small class="text-muted">29 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 9</a>
                        </h5>
                        <p><small class="text-muted">46 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 10</a>
                        </h5>
                        <p><small class="text-muted">51 menit yang
                                lalu</small></p>
                    </div>
                </div>
            </div>
        </div>

        <!--main sidebar 1-->
        @include('partials.mainsidebar1')
        <!--main sidebar 1 end-->
    </div>
    <div class="row">
        <div class="col-md-8">
            <!--advertisement-->
            <div class="col">
                <div class="text-center my-3 fw-bold" style="background-color: rgba(210, 210, 210, 0.803)">
                    <small>advertisement</small>
                    <div>
                        <img src="./img/ads/homepage4-ads.jpg" class="img-fluid mb-3" alt="" />
                    </div>
                </div>
            </div>
            <!--advertisement end-->
            <div class="mb-3">
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 11</a>
                        </h5>
                        <p><small class="text-muted">5 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 12</a>
                        </h5>
                        <p><small class="text-muted">10 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 13</a>
                        </h5>
                        <p><small class="text-muted">29 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 14</a>
                        </h5>
                        <p><small class="text-muted">46 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Kategori 15</a>
                        </h5>
                        <p><small class="text-muted">51 menit yang
                                lalu</small></p>
                    </div>
                </div>
            </div>

            <!--pagination-->
            <nav class="my-3">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item active bg-dark"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <!--pagination end-->
        </div>

        <!--main sidebar 2-->
        @include('partials.mainsidebar2')
        <!--main sidebar 2 end-->
    </div>
    <!--content end-->
@endsection
