@extends ('laraMoney.appMoney')
@section ('content')
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('material-kit/assets/img/bg2.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    <h1>Hello There.</h1>
                    <h3>Welcome to LARA MONEY</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <div class="row">
                <div class="col-md-9 ml-auto mr-auto">
                    <div class="avatar">
                        <img src="{{ asset('img/01.jpg') }}" alt="laraMoney" class="img-raised rounded-circle img-fluid" height="200" width="200">
                    </div>
                        <h2 class="title">Let&apos;s talk about finance</h2>
                            <h5 class="description">sometimes we find it difficult to manage our finances on a daily basis, because records are easily damaged or easily damaged. This is certainly very detrimental because we never know our financial flow in expenditure or income, so we cannot manage money or manage money in every expenditure or income. With this application it can make it easier for someone to record or record our finances. Very easy to use and data is not easily damaged or lost anymore, we can manage our finances regularly and be safe in spending something or when entering our salary.</h5>
                        <footer class="blockquote-footer">By <cite title="Source Title">Riyan&apos;s</cite></footer>
                        <a href="{{ Route('home.finance') }}" class="btn btn-primary">Go and try</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection