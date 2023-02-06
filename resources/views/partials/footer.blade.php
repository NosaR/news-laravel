<!--ads footer-->
<div class="container">
    <div class="text-center my-3 fw-bold" style="background-color: rgba(210, 210, 210, 0.803)">
        <small>advertisement</small>
        <div>
            <img src="./img/ads/footer-ads.jpg" class="img-fluid mb-3" alt="" />
        </div>
    </div>
</div>
<!--ads footer end-->

<!--footer-->
<div class="container-fluid">
    <footer class="my-4">
        <div class="text-center my-4">
            <a class="navbar-brand" href="#"><img src="./img/logo.png" class="img-fluid" alt="" /></a>
        </div>
        <div class="text-center my-2">
            <p class="mb-3">
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
        <ul class="nav justify-content-center border-bottom">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Redaksi</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pedoman Siber</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Disclaimer</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Privacy Policy</a></li>
        </ul>
        <div class="text-center mt-3">
            <p class="text-muted">Copyright &copy; 2022 myway.co.id.
                All right reserved</p>
        </div>
    </footer>
</div>
<!--footer end-->

<!-- Summernote -->
<script src="/assets/plugins/summernote/summernote-bs5.js"></script>

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

<!-- teks editor summernote-->
<script>
    $(document).ready(function() {
        // Summernote
        $('#summernote').summernote({
            placeholder: "Tulis Artikel ...",
            height: 250,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['misc', ['fullscreen', 'codeview', 'undo', 'redo']],
            ]
        });
    })
</script>
