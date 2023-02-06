@extends('layouts.main')
@section('container')
    <!--content-->
    <div class="row my-2">
        <div class="col-md-8">
            <!--breadcumb-->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"
                            class="text-muted text-decoration-none"><small>HOME</small></a></li>
                    <li class="breadcrumb-item"><a href="#"
                            class="text-muted text-decoration-none"><small>KATEGORI</small></a>
                    </li>
                </ol>
            </nav>
            <!--breadcumb end-->

            <!--Isi Artikel-->
            <div class="">
                <h1 class="my-3 text-center">JUDUL ARTIKEL</h1>
                <p class="text-center"><strong><a href="#"
                            class="text-decoration-none text-danger">Penulis</a></strong> -
                    Rabu, 1 Feb 2022 | 08.00 WIB
                </p>
                <img src="./img/content.jpg" alt="" class="img-fluid my-2 align-content-center">
                <small>Caption Foto</small>
                <article class="my-3 fs-5">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium illum quaerat omnis excepturi
                        aut ut
                        sint quisquam!
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, eveniet laudantium ipsa ipsum nisi
                        molestias expedita perspiciatis omnis, impedit enim qui recusandae? Autem, voluptates laborum?
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus esse reprehenderit culpa magni
                        aperiam
                        odio excepturi facere! Praesentium, dolorum cumque.
                    </p>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, ducimus perspiciatis molestiae
                        illum
                        ipsum eveniet aut cum tempora similique!
                    </p>
                    <!--Iklan dalam artikel-->
                    <div class="col">
                        <div class="text-center mb-3 fw-bold" style="background-color: rgba(210, 210, 210, 0.803)">
                            <small>advertisement</small>
                            <div>
                                <img src="./img/ads/afterheadline-ads.jpg" class="img-fluid mb-3" alt="" />
                            </div>
                        </div>
                    </div>
                    <!--Iklan dalam artikel end-->
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium illum quaerat omnis excepturi
                        aut ut
                        sint quisquam!
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, eveniet laudantium ipsa ipsum nisi
                        molestias expedita perspiciatis omnis, impedit enim qui recusandae? Autem, voluptates laborum?
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus esse reprehenderit culpa magni
                        aperiam
                        odio excepturi facere! Praesentium, dolorum cumque.
                    </p>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, ducimus perspiciatis molestiae
                        illum
                        ipsum eveniet aut cum tempora similique!
                    </p>
                </article>
                <!--pagination-->
                <nav class="my-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!--pagination end-->

                <!--tag-->
                <div class="my-3">
                    <button class="btn text-white" style="background-color: #002060;" type="submit">tag 1</button>
                    <button class="btn text-white" style="background-color: #002060;" type="submit">tag 2</button>
                    <button class="btn text-white" style="background-color: #002060;" type="submit">tag 3</button>
                </div>
                <!--tag end-->

                <!--share-->
                <div class="my-3">
                    <strong>Share: </strong>
                    <p class="my-3 d-inline">
                        <a href="#" class="align-items-center" style="color: #4267b2"><i
                                class="fa-brands fa-square-facebook fa-2xl mx-1"></i></a>
                        <a href="#" class="align-items-center" style="color: #1da1f2"><i
                                class="fa-brands fa-square-twitter fa-2xl mx-1"></i></a>
                        <a href="#" class="align-items-center" style="color: #25d366"><i
                                class="fa-brands fa-whatsapp fa-2xl mx-1"></i></a>
                    </p>
                </div>
                <!--share end-->

                <p class="my-3">
                    <strong>Editor: Editor</strong>
                    <br>
                    <strong>Sumber: Sumber Artikel</strong>
                </p>
            </div>
            <!--Isi Artikel end-->

            <!--Iklan dibawah artikel-->
            <div class="col">
                <div class="text-center mb-3 fw-bold" style="background-color: rgba(210, 210, 210, 0.803)">
                    <small>advertisement</small>
                    <div>
                        <img src="./img/ads/afterheadline-ads.jpg" class="img-fluid mb-3" alt="" />
                    </div>
                </div>
            </div>
            <!--Iklan dibawah artikel end-->

            <!--Artikel Terkait-->
            <div class="col my-2">
                <h4>ARTIKEL TERKAIT</h4>
            </div>
            <div class="">
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 w-25 img-fluid" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terkait 1</a></h5>
                        <p><small><a class="link text-decoration-none text-muted" href="#">KATEGORI</a></small>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 w-25 img-fluid" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terkait 2</a></h5>
                        <p><small><a class="link text-decoration-none text-muted" href="#">KATEGORI</a></small>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 w-25 img-fluid" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terkait 3</a></h5>
                        <p><small><a class="link text-decoration-none text-muted" href="#">KATEGORI</a></small>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 w-25 img-fluid" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terkait 4</a></h5>
                        <p><small><a class="link text-decoration-none text-muted" href="#">KATEGORI</a></small>
                    </div>
                </div>
                <div class="col d-flex my-2 border-bottom">
                    <img src="./img/content.jpg" class="me-2 w-25 img-fluid" alt="..." />
                    <div class="mt-2">
                        <h5><a class="link text-decoration-none text-dark" href="#">Judul Artikel Terkait 5</a></h5>
                        <p><small><a class="link text-decoration-none text-muted" href="#">KATEGORI</a></small>
                    </div>
                </div>
            </div>
            <!--Artikel Terkait end-->
        </div>

        <!--Sidebar Artikel-->
        @include('partials.sidebarartikel')
        <!--Sidebar Artikel-->
    </div>

    <!--content end-->
@endsection
