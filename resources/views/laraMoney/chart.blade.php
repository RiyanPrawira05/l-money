@extends ('laraMoney.appMoney')
@section ('content')
<div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('material-kit/assets/img/bg3.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-nav-tabs">
    <div class="card-header card-header-primary">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ Route('chart.finance') }}"><i class="fa fa-th btn btn-primary btn-just-icon btn-round"></i> Chart</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h4 class="card-title">..</h4>
            <p class="card-text">..</p>
            <canvas id="myChart" width="400" height="100"></canvas>
        </div> 
    </div>
</div>
@endsection
@section('script')
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
@endsection