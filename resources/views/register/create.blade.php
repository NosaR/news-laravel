@extends('dapur.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center">
                    <h4>Tambah Gambar Baru</h4>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="my-3 mx-3">
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="">
                    @error('name')
                        <div class="invalid-feedback">
                            Nama harus diisi
                        </div>
                    @enderror
                    <small style="color: blue">Maksimal 170 Karakter</small>
                    {{-- <small style="color: blue">Slug SEO Otomatis</small> --}}
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" maxlength="170" value="">
                    @error('email')
                        <div class="invalid-feedback">
                            Emailnya belum diisi nih
                        </div>
                    @enderror
                    <small style="color: blue">Maksimal 170
                        Karakter</small>
                </div>

                <div class="mb-3">
                    <label for="job" class="form-label">Job</label>
                    <select class="form-select" name="job" id="job">
                        <option value="Super Admin" selected>Super Admin</option>
                        <option value="Chief Editor">Chief Editor</option>
                        <option value="Editor">Editor</option>
                        <option value="Ads Editor">Ads Editor</option>
                        <option value="Author">Author</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control @error('role') is-invalid @enderror" id="role"
                        name="role" maxlength="170" value="1" id="role">
                    @error('role')
                        <div class="invalid-feedback">
                            Emailnya belum diisi nih
                        </div>
                    @enderror
                </div>
                <button type="submit" value="save" class="btn btn-success my-2">Tambah User</button>
            </form>
        </div>

        <script>
            document.getElementById("job").addEventListener("change", function() {
                if (this.value == "Super Admin") {
                    document.getElementById("role").value = 1;
                } else if (this.value == "Chief Editor") {
                    document.getElementById("role").value = 2;
                } else if (this.value == "Editor") {
                    document.getElementById("role").value = 3;
                } else if (this.value == "Ads Editor") {
                    document.getElementById("role").value = 4;
                } else {
                    document.getElementById("role").value = 5;
                }
            });
        </script>

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
