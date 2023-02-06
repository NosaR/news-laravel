        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2023 <a class="text-decoration-none"
                    href="https://myway.co.id">Myway.co.id</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets') }}/dist/js/adminlte.min.js"></script>
        <!-- Summernote -->
        <script src="{{ asset('assets') }}/plugins/summernote/summernote-bs5.js"></script>
        <!-- CodeMirror -->
        <script src="{{ asset('assets') }}/plugins/codemirror/codemirror.js"></script>
        <script src="{{ asset('assets') }}/plugins/codemirror/mode/css/css.js"></script>
        <script src="{{ asset('assets') }}/plugins/codemirror/mode/xml/xml.js"></script>
        <script src="{{ asset('assets') }}/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"
            integrity="sha512-9UR1ynHntZdqHnwXKTaOm1s6V9fExqejKvg5XMawEMToW4sSw+3jtLrYfZPijvnwnnE8Uol1O9BcAskoxgec+g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- teks editor -->
        <script>
            $(document).ready(function() {
                // Summernote
                $('#summernote').summernote({
                    placeholder: "Tulis Artikel keren disini...",
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

                // CodeMirror
                CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                    mode: "htmlmixed",
                    theme: "monokai"
                });
            })
        </script>
