@extends ('laraMoney.appMoney')
@section ('content')
<header class="masthead text-center text-white">
    <div class="masthead-content">
        <div class="container">
            <h1 class="masthead-heading mb-0">Welcome !!</h1>
            <h2 class="masthead-subheading mb-0">Manage your finance now</h2>
            <a href="{{ Route('home.finance') }}" class="btn btn-primary btn-xl rounded-pill mt-5">Get started</a>
        </div>
    </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="{{ asset('creative-agency/img/01.jpg') }}" alt="lara-money">
                </div>
            </div>
        <div class="col-lg-6 order-lg-1">
            <div class="p-5">
                <h2 class="display-4">Hello.. There,</h2>
                <p>We can manage our finances so that expenses and revenues can be recorded in a structured and safe manner</p>
                <p class="mt-3 mb-0 card-text text-danger">See your table finance here</p>
                <a href="{{ Route('home.finance') }}" class="btn btn-secondary btn-md rounded-pill mt-2">Go now !!</a>
            </div>
        </div>
    </div>
</div>
@endsection