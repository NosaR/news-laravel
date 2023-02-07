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
            <form method="POST" action="{{ route('image.update', $image->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <img class="img-preview img-fluid mb-3 col-sm-3" src="{{ asset($image->image) }}">
                    <input class="form-control @error('image') is-invalid @enderror my-3" type="file" id="image"
                        name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            Gambar maksimal 200 kb (jpg,jpeg,png) atau gambar belum diupload bray
                        </div>
                    @enderror
                    <small style="color: blue">Ukuran file yg di sarankan width 1000px x height 640px</small>
                </div>
                <div class="mb-3">
                    <label for="caption" class="form-label">Caption</label>
                    <input type="text" class="form-control @error('caption') is-invalid @enderror" id="caption"
                        name="caption" value="{{ $image->caption }}">
                    @error('caption')
                        <div class="invalid-feedback">
                            Caption harus diisi sebelum menambahkan gambar
                        </div>
                    @enderror
                    <small style="color: blue">Maksimal 170 Karakter</small>
                    {{-- <small style="color: blue">Slug SEO Otomatis</small> --}}
                </div>
                <div class="mb-3">
                    <label for="credit" class="form-label">Credit atau Sumber Gambar</label>
                    <input type="text" class="form-control @error('credit') is-invalid @enderror" id="credit"
                        name="credit" maxlength="170" value="{{ $image->credit }}">
                    @error('credit')
                        <div class="invalid-feedback">
                            Nah, Deskripsinya belum diisi nih
                        </div>
                    @enderror
                    <small style="color: blue">Maksimal 170
                        Karakter</small>
                </div>
                <button type="submit" value="save" class="btn btn-success my-2">Tambah Gambar</button>
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
