@extends ('money.appMoney') 
@section ('home')

<!-- Header -->
<header id="home">

    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('creative-agency/img/background1.jpg');">
        <div class="overlay"></div>
    </div>

    <!-- Nav -->
    <nav id="nav" class="navbar nav-transparent">
        <div class="container">

            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a href="javascript:0;">
                        <img class="logo" src="{{ asset('creative-agency/img/money-app.jpg') }}" alt="logo">
                    </a>
                    <a href="javascript:0;">
                        <span class="logo-alt">Money App</span>
                    </a>
                </div>

                <!-- Collapse nav button -->
                <div class="nav-collapse">
                    <span></span>
                </div>
            </div>

            <!--  Main navigation  -->
            <ul class="main-nav nav navbar-nav navbar-right">
                <li><a href="#home">Home</a></li>
                <li><a href="{{ Route('money.index') }}">Financial Record</a></li>
            </ul>
        </div>
    </nav>
    <!-- /Nav -->

    <!-- home wrapper -->
    <div class="home-wrapper">
        <div class="container">
            <div class="row">

                <!-- home content -->
                <div class="col-md-10 col-md-offset-1">
                    <div class="home-content">
                        <h2 class="white-text">Welcome To Money-App</h2>
                        <p class="white-text">You can manage your money and record expenses and income by date
                        </p>
                        <a href="{{ Route('money.index') }}" class="btn btn-info btn-lg">Get Started !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
