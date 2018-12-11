<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="author" content="AppMoney">

    <title>App-Money</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('creative-agency/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('creative-agency/css/one-page-wonder.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('creative-agency/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css')}}">
</head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Lara Money</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('home') }}">@yield('home')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('money.index') }}">@yield('index')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container">
                    @yield('heading')
                    @yield('subheading')
                    @yield('btn')
                </div>
            </div>
                <div class="bg-circle-1 bg-circle"></div>
                <div class="bg-circle-2 bg-circle"></div>
                <div class="bg-circle-3 bg-circle"></div>
                <div class="bg-circle-4 bg-circle"></div>
        </header>

        @yield('content')

    <!-- Footer -->
    <footer class="py-5 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white small">Copyright &copy; 2018 by Riyan's</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('creative-agency/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('creative-agency/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('creative-agency/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ asset('creative-agency/vendor/datetimepicker/js/bootstrap-datetimepicker.fr.js')}}"></script>
    @yield('script')

  </body>
</html>
