@extends('layouts.main')
@section('container')
    <!--content-->
    <div class="row my-2">
        <div class="col-md-8">

            <div class="col my-2">
                <h4>INDEKS ARTIKEL</h4>
            </div>
            <div class="">
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 1</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">5 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 2</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">10 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 3</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">29 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 4</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">46 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 5</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">51 menit yang
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
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 6</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">5 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 7</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">10 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 8</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">29 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 9</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">46 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 10</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">51 menit yang
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
        <!--advertisement-->
        <div class="col">
            <div class="text-center my-3 fw-bold" style="background-color: rgba(210, 210, 210, 0.803)">
                <small>advertisement</small>
                <div>
                    <img src="./img/ads/homepage2-ads.jpg" class="img-fluid mb-3" alt="" />
                </div>
            </div>
        </div>
        <!--advertisement end-->
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
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 11</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">5 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 12</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">10 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 13</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">29 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 14</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">46 menit yang
                                lalu</small></p>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 img-fluid" style="width: 32%" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terbaru 15</a>
                        </h5>
                        <p><small><a class="link text-decoration-none text-muted"
                                    href="#">KATEGORI</a></small><br /><small class="text-muted">51 menit yang
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
