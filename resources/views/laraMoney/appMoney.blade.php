</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material-kit/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('material-kit/assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        LARA MONEY
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- CSS Files -->
    <link href="{{ asset('material-kit/assets/css/material-kit.css') }}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('material-kit/assets/demo/demo.css') }}" rel="stylesheet" />
    @yield('css')
</head>

<body class="index-page sidebar-collapse">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="#">LARA MONEY</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('home') }}"><i class="material-icons">dashboard</i> Home</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="material-icons">apps</i> Finance</a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="javascript:0" class="dropdown-item"><i class="material-icons">insert_chart</i> Chart</a>
                            <a href="{{ Route('home.finance') }}" class="dropdown-item"><i class="material-icons">content_paste</i> Table</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow me on Gitlab"><i class="fa fa-gitlab"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow me on Gmail"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <div class="main main-raised">
    <div class="section section-basic">
        <div class="container">
            <div class="title">
                <h2>Basic Elements</h2>
            </div>
        </div>
    </div> -->
    @yield('content')
    <br>
    <br>

    <footer class="footer bg-dark text-white" data-background-color="black">
        <div class="container">
            <nav class="float-center">
                <ul>
                    <li>
                        <a class="fa fa-twitter" rel="tooltip" title="" data-placement="top" href="#" target="_blank" data-original-title="Follow me on Twitter"></a>
                    </li>
                    <li>
                        <a class="fa fa-facebook-f" rel="tooltip" title="" data-placement="top" href="#" target="_blank" data-original-title="Follow me on Facebook"></a>
                    </li>
                    <li>
                        <a class="fa fa-instagram" rel="tooltip" title="" data-placement="top" href="#" target="_blank" data-original-title="Follow me on Instagram"></a>
                    </li>
                    <li>
                        <a class="fa fa-google-plus" rel="tooltip" title="" data-placement="top" href="#" target="_blank" data-original-title="Follow me on Gmail"></a>
                    </li>
                    <li>
                        <a class="fa fa-gitlab" rel="tooltip" title="" data-placement="top" href="#" target="_blank" data-original-title="Follow me on Gitlab"></a>
                    </li>
                </ul>
            </nav>

            <div class="copyright">&copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons text-danger">favorite</i> by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
            </div>
        </div>
    </footer>

    <!--   Core JS Files   -->
    <script src="{{ asset('material-kit/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('material-kit/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('material-kit/assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('material-kit/assets/js/plugins/moment.min.js') }}"></script>
    <script src="{{ asset('material-kit/assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('material-kit/assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('material-kit/assets/js/material-kit.js') }}" type="text/javascript"></script>
    @yield('script')
    <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });
    // function scrollToDownload() {
    //   if ($('.class/#id').length != 0) {
    //     $("html, body").animate({
    //       scrollTop: $('.section-download').offset().top
    //     }, 1000);
    //   }
    // } 
    // onclick="scrollToDownload()" untuk memanggil fungsi ini agar ketika di pencet dia langsung kebawah
</script>
</body>
</html>

