@extends('money.appMoney')

@section('content')

<!-- Nav -->
<nav id="nav" class="navbar">
    <div class="container">
        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a href="javascript:0;">
                    <img class="logo" src="{{ asset('creative-agency/img/money-app.jpg') }}" alt="logo">
                </a>
            </div>
        </div>
        <!--  Main navigation  -->
        <ul class="main-nav nav navbar-nav navbar-right">
            <li><a href="{{ Route('home') }}">Home</a></li>
            <li><a href="{{ Route('money.index') }}">Financial Record</a></li>
        </ul>
    </div>
</nav>

    <!-- About -->
    <div class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h3 class="title">Financial Record</h3>
                </div>

                <!-- about -->
                <div class="col-md-12">
                    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
