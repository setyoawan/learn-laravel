<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/bootstrap-4/css/bootstrap.min.css">

    <!-- menerima content -->
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ml-auto">
                    <!-- semacam base url{{ url('/') }}  -->
                    <a class="nav-item nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{ url('/about') }}">About</a>
                    <a class="nav-item nav-link" href="{{ url('/mahasiswa') }}">Mahasiswa</a>
                    <a class="nav-item nav-link" href="{{ url('/students') }}">Students</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- menerima content -->
    @yield('container')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/jquery/jquery.min.js"></script>
    <script src="/assets/jquery/popper.min.js"></script>
    <script src="/assets/bootstrap-4/js/bootstrap.min.js"></script>

</body>

</html>