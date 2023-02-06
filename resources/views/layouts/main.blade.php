<!doctype html>
<html lang="en">

<head>
    <!--header start-->
    @include('partials.header')
    <!--header end-->
</head>

<body>
    <!--navbar start-->
    @include('partials.navbar')
    @include('partials.headerads')
    <!--navbar end-->
    <!--content-->
    <div class="container">
        @yield('container')
    </div>
    <!--content end-->

    <!--footer-->
    @include('partials.footer')
    <!--footer end-->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
