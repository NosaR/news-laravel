@extends('dapur.layouts.main')

@section('container')
    <!-- Main content -->
    <section class="content">

        <div class="container">
            <div class="row justify-content-center">
                <div class="my-3 mx-3">
                    <h1 class="mb-3">Judul Artikel</h1>
                    <p>Editor: <strong><a href="#" class="text-decoration-none">Editor</a></strong>
                        <br>
                        Penulis: <strong><a href="#" class="text-decoration-none">Penulis</a></strong>
                        <br>
                        Kategori: <strong><a href="#" class="text-decoration-none">Kategori</a></strong>
                    </p>
                    <div>
                        <a href="#" class="btn btn-success">Kembali</a>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <form action="#" method="post" class="d-inline">
                            <button class="btn btn-danger"
                                onclick="return confirm('Yakin mau hapus artikel?')">Hapus</button>
                        </form>
                    </div>
                    <img src="../img/conten.jpg" alt="gambar artikel" class="img-fluid mt-3">
                    <article class="my-3 fs-5">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias quibusdam molestias temporibus quam
                        numquam iste architecto! Laboriosam neque delectus et nesciunt, molestiae ab fuga quo eos inventore
                        esse perspiciatis magnam repudiandae blanditiis, voluptas, nihil est laborum nostrum facilis eveniet
                        dolor. Facere saepe reiciendis enim minima asperiores dolor veniam quia beatae architecto modi ab,
                        eos dignissimos, similique nulla reprehenderit quidem dolorum ullam eaque itaque perferendis ipsam
                        voluptatem odio. Perspiciatis dolorum commodi quae incidunt natus ut maiores at officia quis omnis
                        voluptate id maxime et excepturi accusantium, atque, nam harum voluptatum. Laudantium saepe delectus
                        corporis illo alias inventore omnis cum vel? Ipsam?
                    </article>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
