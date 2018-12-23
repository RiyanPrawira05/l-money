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
        <canvas id="myChart" width="400" height="100"></canvas>
    </div> 
</div>
</div>
@endsection
@section('script')
<script>
let chartAmount = document.getElementById('myChart').getContext('2d');

// Global Options
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontColor = 'black';

let desains = new Chart(chartAmount, {
    type: 'line',
    data: {
        labels: [
            @foreach($total as $key => $val)
            '{{ $key }}',
            @endforeach
        ],
        datasets: [{
            label: 'Amount',
            data: [
                @foreach($total as $key => $val)
                '{{ $val }}',
                @endforeach
            ],
            backgroundColor: [
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        title:{
            display:true,
            text:'Jumlah pengeluaran dan pemasukkan /bulan',
            fontSize:25
            },
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