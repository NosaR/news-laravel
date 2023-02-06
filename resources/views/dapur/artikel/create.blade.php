@extends('dapur.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center">
                    <h4>Buat Artikel Baru</h4>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="my-3 mx-3">
            <form method="post" action="#" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" maxlength="110" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            Nah, Judulnya belum dibuat nih
                        </div>
                    @enderror
                    <small style="color: blue">Maksimal 110
                        Karakter</small>
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                        name="slug" value="">
                    @error('slug')
                        <div class="invalid-feedback">
                            Slug harus diisi atau otomatis terisi setelah membuat judul
                        </div>
                    @enderror
                    <small style="color: blue">Slug SEO Otomatis</small>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" maxlength="170" value="">
                    @error('description')
                        <div class="invalid-feedback">
                            Nah, Deskripsinya belum diisi nih
                        </div>
                    @enderror
                    <small style="color: blue">Maksimal 170
                        Karakter</small>
                </div>

                <div class="mb-3">
                    <label for="kategori_id" class="form-label">Kategori</label>
                    <select class="form-select" name="kategori_id">
                        <option value="kategori_id" selected>Kategori 1</option>
                        <option value="kategori_id" selected>Kategori 2</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Isi Artikel</label>
                    @error('body')
                        <p class="text-danger">Eh lupa belum ada isinya</p>
                    @enderror
                    <div>
                        <textarea id="summernote" name="body" class="form-control"></textarea>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="tags" class="form-label">Tag</label>
                    @include('dapur.artikel.tags')
                </div>

                <div class="mb-3">
                    <label for="keyword" class="form-label">Longtail Keywords</label>
                    @include('dapur.artikel.longtailkeywords')
                </div>

                <div class="mb-3">
                    <label for="penulis_id" class="form-label">Penulis</label>
                    <select class="form-select" name="penulis_id">
                        <option value="penulis_id" selected>Penulis 1</option>
                        <option value="penulis_id" selected>Penulis 2</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sumber" class="form-label">Sumber Artikel</label>
                    <input type="text" class="form-control" id="sumber" name="sumber" value="">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Headline</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault-headline"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Headline Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault-headline"
                            id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Headline No
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Pilihan Editor</label>
                    <div class="form-check pilihan">
                        <input class="form-check-input" type="radio" name="flexRadioDefault-pilihan"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Pilihan Editor Yes
                        </label>
                    </div>
                    <div class="form-check pilihan">
                        <input class="form-check-input" type="radio" name="flexRadioDefault-pilihan"
                            id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Pilihan Editor No
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Rekomendasi</label>
                    <div class="form-check pilihan">
                        <input class="form-check-input" type="radio" name="flexRadioDefault-rekomendasi"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Rekomendasi Yes
                        </label>
                    </div>
                    <div class="form-check pilihan">
                        <input class="form-check-input" type="radio" name="flexRadioDefault-rekomendasi"
                            id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Rekomendasi No
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Status</label>
                    <div class="form-check pilihan">
                        <input class="form-check-input" type="radio" name="flexRadioDefault-status"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Publish Yes
                        </label>
                    </div>
                    <div class="form-check pilihan">
                        <input class="form-check-input" type="radio" name="flexRadioDefault-status"
                            id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Publish No <strong>(Masuk ke konsep)</strong>
                        </label>
                    </div>
                </div>

                <div class="mt-5 mb-5">
                    <label for="image" class="form-label me-5">Gambar Artikel</label>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#tambahgambar">
                        Tambah Gambar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="tambahgambar" tabindex="-1" aria-labelledby="tambahgambar"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="tambahgambar">Upload atau pilih gambar</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>*Ukuran file yg di sarankan width 1000px x height 640px
                                        **maksimal size 200KB jika file melebihi file tersebut bisa di <a
                                            href="https://squoosh.app/" target="_blank"><strong>compress
                                                disini</strong></a></p>
                                    <img class="img-preview img-fluid mb-3 col-sm-3">
                                    <input class="form-control @error('image') is-invalid @enderror my-3" type="file"
                                        id="image" name="image" onchange="previewImage()">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            Gambar maksimal 200 kb (jpg,jpeg,png) atau gambar belum diupload bray
                                        </div>
                                    @enderror
                                </div>
                                <div class="container mb-3">
                                    <label for="caption" class="form-label">Caption</label>
                                    <input type="text" class="form-control" id="caption" name="caption"
                                        value="">
                                </div>
                                <div class="container">
                                    <label for="credit" class="form-label">Sumber atau Credit Foto</label>
                                    <input type="text" class="form-control" id="credit" name="credit"
                                        value="">
                                </div>

                                <hr class="divider">

                                <div>
                                    <div class="container mb-3">
                                        <label for="carigambar" class="form-label">Cari Gambar</label>
                                        <form class="d-flex" role="carigambar">
                                            <input class="form-control me-2" type="carigambar" placeholder="Cari Gambar"
                                                aria-label="carigambar">


                                            <div class="row row-cols-1 row-cols-md-4 g-2 my-3">
                                                <div class="col">
                                                    <div class="card">
                                                        <img src="../../img/content.jpg"" class="card-img-top img-fluid"
                                                            alt="...">
                                                        <div class="card-body">
                                                            <p class="card-text">Caption</p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small class="text-muted"><i
                                                                    class="fa-solid fa-edit me-3"></i></small>
                                                            <form action="#" method="post" class="d-inline">
                                                                <small
                                                                    onclick="return confirm('Yakin mau hapus artikel?')"><i
                                                                        class="fa-solid fa-trash"></i></small>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card">
                                                        <img src="../../img/content.jpg"" class="card-img-top img-fluid"
                                                            alt="...">
                                                        <div class="card-body">
                                                            <p class="card-text">Caption</p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small class="text-muted"><i
                                                                    class="fa-solid fa-edit me-3"></i></small>
                                                            <form action="#" method="post" class="d-inline">
                                                                <small
                                                                    onclick="return confirm('Yakin mau hapus artikel?')"><i
                                                                        class="fa-solid fa-trash"></i></small>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card">
                                                        <img src="../../img/content.jpg"" class="card-img-top img-fluid"
                                                            alt="...">
                                                        <div class="card-body">
                                                            <p class="card-text">Caption</p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small class="text-muted"><i
                                                                    class="fa-solid fa-edit me-3"></i></small>
                                                            <form action="#" method="post" class="d-inline">
                                                                <small
                                                                    onclick="return confirm('Yakin mau hapus artikel?')"><i
                                                                        class="fa-solid fa-trash"></i></small>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card">
                                                        <img src="../../img/content.jpg"" class="card-img-top img-fluid"
                                                            alt="...">
                                                        <div class="card-body">
                                                            <p class="card-text">Caption</p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small class="text-muted"><i
                                                                    class="fa-solid fa-edit me-3"></i></small>
                                                            <form action="#" method="post" class="d-inline">
                                                                <small
                                                                    onclick="return confirm('Yakin mau hapus artikel?')"><i
                                                                        class="fa-solid fa-trash"></i></small>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card">
                                                        <img src="../../img/content.jpg"" class="card-img-top img-fluid"
                                                            alt="...">
                                                        <div class="card-body">
                                                            <p class="card-text">Caption</p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small class="text-muted"><i
                                                                    class="fa-solid fa-edit me-3"></i></small>
                                                            <form action="#" method="post" class="d-inline">
                                                                <small
                                                                    onclick="return confirm('Yakin mau hapus artikel?')"><i
                                                                        class="fa-solid fa-trash"></i></small>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </form>
                                        <!--pagination-->
                                        <nav class="my-3">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link">Previous</a>
                                                </li>
                                                <li class="page-item active bg-dark"><a class="page-link"
                                                        href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!--pagination end-->
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary">Simpan & Gunakan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="img-preview img-fluid mb-3 col-sm-3">
                </div>

                <button type="submit" class="btn btn-success my-5">Buat Artikel</button>
            </form>
        </div>




        <!-- slug otomatis -->
        <script>
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title.addEventListener('change', function() {
                fetch('/dapur/artikel/checkSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            });
        </script>

        <!-- IMG Preview -->
        <script>
            function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.img-preview');

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        </script>



    </section>
    <!-- /.content -->
@endsection
