@extends ('laraMoney.appMoney')

@section ('home') Home @endsection
@section ('index') Finance @endsection
@section ('heading') <h1 class="masthead-heading mb-0">Welcome !!</h1> @endsection
@section ('subheading') <h2 class="masthead-subheading mb-0">Manage your finance now</h2> @endsection
@section ('btn') <a href="{{ Route('money.index') }}" class="btn btn-primary btn-xl rounded-pill mt-5">Get started</a> @endsection
@section ('content')
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="{{ asset('creative-agency/img/01.jpg') }}" alt="lara-money">
                </div>
            </div>
        <div class="col-lg-6 order-lg-1">
            <div class="p-5">
                <h2 class="display-4">Hello,</h2>
                <p>We can manage our finances so that expenses and revenues can be recorded in a structured and safe manner</p>
                <p class="mt-3 mb-0 card-text text-muted">See your table finance here</p>
                <a href="{{ Route('money.index') }}" class="btn btn-info btn-md rounded-pill mt-2">See now</a>
            </div>
        </div>
    </div>
</div>
</section>
@endsection