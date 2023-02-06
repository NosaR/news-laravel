@extends('layouts.main')
@section('container')
    <!--form kirim artikel-->
    <div class="container justify-content-center">
        <div class="my-5">
            <h4 class="text-center fw-bold">KIRIM ARTIKEL</h4>
        </div>
        <div class="my-3 fw-bold">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control text-muted" id="judul" name="judul" maxlength="110"
                        value="">
                    <div class="invalid-feedback">
                        Judul belum diisi
                    </div>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Isi Artikel</label>
                    <div>
                        <textarea id="summernote" name="body" class="form-control"></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Artikel</label>
                    <img class="img-preview img-fluid mb-3 col-sm-3">
                    <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                    <div class="invalid-feedback">
                        Gambar maksimal 512 kb (jpg,jpeg,png) atau gambar belum diupload bray
                    </div>
                </div>
                <div class="mb-3">
                    <label for="penulis_id" class="form-label">Penulis</label>
                    <select class="form-select" name="penulis_id">
                        <option value="Penulis 1" selected>Penulis 1</option>
                        <option value="Penulis 2">Penulis 2</option>
                        <option value="Penulis 3">Penulis 3</option>
                    </select>
                </div>

                <button type="submit" class="btn text-white my-3" style="background-color: #002060;">Kirim Artikel</button>
            </form>
        </div>

    </div>
    <!--form kirim artikel end-->
@endsection
