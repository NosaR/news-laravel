@extends('layouts.main')
@section('container')
    <!--form pendaftaran penulis-->
    <div class="container justify-content-center">
        <div class="my-5">
            <h4 class="text-center fw-bold">FORMULIR PENDAFTARAN PENULIS</h4>
        </div>
        <div class="my-3 fw-bold">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control text-muted" id="nama" name="nama" maxlength="110"
                        value="Masukkan nama lengkap kamu ...">
                    <div class="invalid-feedback">
                        Nama lengkap belum diisi
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" class="form-control text-muted" id="address" name="address"
                        value="Masukkan alamat lengkap kamu ...">
                    <div class="invalid-feedback">
                        Nah, Alamat belum diisi nih
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control text-muted" id="email" name="email"
                        value="myway@gmail.com">
                    <div class="invalid-feedback">
                        Email salah atau belum diisi
                    </div>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telpon</label>
                    <input type="number" class="form-control text-muted" id="phone" name="phone" minlength="8"
                        maxlength="13" value="082112345678">
                    <div class="invalid-feedback">
                        <small style="color: red">No.telp belum diisi atau format nomor salah</small>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="website" class="form-label">Website</label>
                    <input type="text" class="form-control text-muted" id="website" name="website"
                        value="https://www.situssaya.com">
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control text-muted" id="facebook" name="facebook"
                        value="https://facebook.com/username">
                </div>
                <div class="mb-3">
                    <label for="linkedin" class="form-label">Linkedin</label>
                    <input type="text" class="form-control text-muted" id="linkedin" name="linkedin"
                        value="https://www.linkedin.com/in/akunsaya">
                </div>
                <div class="mb-3">
                    <label for="twitter" class="form-label">Twitter</label>
                    <input type="text" class="form-control text-muted" id="twitter" name="twitter"
                        value="https://twitter.com/username">
                </div>
                <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <input type="text" class="form-control text-muted" id="instagram" name="instagram"
                        value="https://www.instagram.com/username">
                </div>
                <div class="mb-3">
                    <label for="youtube" class="form-label">Youtube</label>
                    <input type="text" class="form-control text-muted" id="youtube" name="youtube"
                        value="https://www.youtube.com/namachannel">
                </div>
                <div class="mb-3">
                    <label for="tiktok" class="form-label">TikTok</label>
                    <input type="text" class="form-control text-muted" id="tiktok" name="tiktok"
                        value="https://www.tiktok.com/username">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Artikel</label>
                    <img class="img-preview img-fluid mb-3 col-sm-3">
                    <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                    <div class="invalid-feedback">
                        Gambar maksimal 512 kb (jpg,jpeg,png) atau gambar belum diupload bray
                    </div>
                </div>

                <!-- Syarat Ketentuan Modal -->
                <button type="button" class="btn text-white my-3" style="background-color: #002060;"
                    data-bs-toggle="modal" data-bs-target="#myModal">
                    Daftar Penulis
                </button>
        </div>
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Syarat & Ketentuan Menjadi Penulis</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>


                    <!-- Scrollable modal -->
                    <div class="mx-3 my-3">
                        <h4 class="fw-bold">Apa Yang Boleh</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sed nisi esse accusamus odio
                            aliquam. Perspiciatis id eius voluptatibus est sapiente eaque, quis facilis culpa rem
                            consectetur quasi
                            nemo nobis deleniti veritatis voluptatem. Dolorum harum facilis numquam quaerat dolore adipisci
                            nisi
                            architecto aliquid. Animi porro facere molestiae optio beatae eaque?</p>
                        <h4 class="my-3 fw-bold">Apa Yang Tidak Boleh</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sed nisi esse accusamus odio
                            aliquam. Perspiciatis id eius voluptatibus est sapiente eaque, quis facilis culpa rem
                            consectetur quasi
                            nemo nobis deleniti veritatis voluptatem. Dolorum harum facilis numquam quaerat dolore adipisci
                            nisi
                            architecto aliquid. Animi porro facere molestiae optio beatae eaque?</p>
                        <h4 class="my-3 fw-bold">Resiko Hukum Atas Isi Artikel Ditanggung Penulis</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sed nisi esse accusamus odio
                            aliquam. Perspiciatis id eius voluptatibus est sapiente eaque, quis facilis culpa rem
                            consectetur quasi
                            nemo nobis deleniti veritatis voluptatem. Dolorum harum facilis numquam quaerat dolore adipisci
                            nisi
                            architecto aliquid. Animi porro facere molestiae optio beatae eaque?</p>
                    </div>
                    <!--Persetujuan Pendaftar-->
                    <div class="form-check my-3 mx-3">
                        <input class="form-check-input" type="checkbox" value="" id="setuju">
                        <label class="form-check-label" for="setuju">
                            Dengan ini <b>Saya</b> menyetujui <b>Syarat dan Ketentuan</b> menjadi penulis
                        </label>
                    </div>
                    <!--Persetujuan Pendaftar end-->

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn text-white" data-bs-dismiss="modal"
                            style="background-color: #ff0200;">Close</button>
                        <button type="submit" class="btn text-white" style="background-color: #002060;">Daftar</button>
                    </div>


                </div>
            </div>
            </form>
        </div>
    </div>
    <!--form pendaftaran penulis end-->
@endsection
