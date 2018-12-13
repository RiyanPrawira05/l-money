<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf_token" content="{!! csrf_token() !!}">
    <meta name="App" content="AppMoney">
    <title>App-Money</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('creative-agency/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('creative-agency/css/one-page-wonder.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('creative-agency/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
    @yield('css')
</head>
    <body>
        <!-- Navigation -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark navbar-custom bg-black">
            <div class="container">
               <a class="navbar-brand" href="#">Lara Money</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <div class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ Route('home') }}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" href="{{ Route('home.finance') }}">Finance</a>
                            </li>
                        </div>
                    </div>
                </div>
            </nav>

    <!-- Header -->
    @yield('header')

    <section>
        <!-- Content -->
        @yield('content')
    </section>

    <footer class="py-5 bg-black">
        <div class="container">
            <p class="m-0 mb-3 text-center text-secondary medium">You can contact and follow me on Instagram : <a href="https://www.instagram.com/accounts/login/?hl=id" class="text-danger">@riyanprawiraa</a></p>
            <p class="m-0 text-center text-secondary small">Copyright &copy; 2018 by Riyan's</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('creative-agency/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('creative-agency/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('creative-agency/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ asset('creative-agency/vendor/datetimepicker/js/bootstrap-datetimepicker.fr.js')}}"></script>
    <script src="{{ asset('creative-agency/vendor/plentz-jquery-maskmoney/src/jquery.maskMoney.js')}}"></script>

    @yield('script')

    </body>
</html>
