@extends ('laraMoney.appMoney')
@section ('css') <link rel="stylesheet" type="text/css" href="{{ asset('creative-agency/vendor/datepicker/css/datepicker.css') }}"> @endsection
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
                <a class="nav-link active" href="{{ Route('home.finance') }}"><i class="material-icons">table_chart</i> Tables</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('create.finance') }}"><i class="material-icons">alarm_add</i> Buat Record</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
    <h4 class="card-title">Make your finances now</h4>
        <p class="card-text">According to your individual needs whether spending on something or entering when receiving a salary or saving at a bank ..</p>
            <div class="table-responsive-md table-responsive-lg table-responsive-sm table-responsive-xs table-responsive-xl ml-auto mr-auto mt-auto">@include ('alerts.alert')
                <form class="form-inline ml-auto mr-auto mt-auto mb-4">
                    <div class="form-group no-border">
                        <div class="input-group date">
                            <input type="text" class="form-control date" name="search" value="" id="date" placeholder="Search by date" size="70">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-white btn-just-icon btn-round"><i class="material-icons">search</i></button>
                </form>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                <form action="{{ Route('delete.finance') }}" method="POST">{{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary btn-fab btn-fab-mini btn-round" type="submit"><span class="material-icons">delete</span></button>
                                </form>
                            </th>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Finance</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col"><span class="fa fa-cog"></span></th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($money) > 0)
                    @foreach ($money as $moneys)
                        <tr>
                            <td>
                                <input type="checkbox" name="ceklis[]" id="ceklis" value="{{ $moneys->id }}">    
                            </td>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ \Carbon\Carbon::parse($moneys->waktu)->format('d M Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($moneys->waktu)->format('h:i') }}</td>
                            <td>{{ $moneys->operator == '+' ? 'Pemasukkan' : 'Pengeluaran' }}</td>

                            @if ($moneys->keterangan)
                                <td>{{ $moneys->keterangan }}</td>
                            @else
                                <td><span class="m-0 text-muted">Tidak ada keterangan</span></td>
                            @endif

                            @if ($moneys->operator == '+')
                                <td><p class="text-success">{{ $moneys->operator }} {{ $moneys->jumlah }}</p></td>
                            @else
                                <td><p class="text-danger">{{ $moneys->operator }} {{ $moneys->jumlah }}</td>
                            @endif
                            <td>
                                <a href="{{ Route('edit.finance', $moneys->id) }}" class="btn btn-primary btn-fab btn-fab-mini btn-round"><i class="material-icons">edit</i></a>
                            </td>
                        </tr>
                        @endforeach
                            <tr>
                            <tbody>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2">
                                        <strong>Jumlah</strong>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $total }}</td>
                                    <td></td>
                            </tbody>
                            </tr>
                        @else
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Danger !</strong> Your finance is empty, <a href="{{ Route('finance.create') }}" class="alert-link">click here</a> for add and record your finance
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        </tbody>
                    </table>
                </div> 
                    {!! $money->links('pagination.custom') !!}
            </div>
        </div>
@endsection
@section('script')
<script src="{{ asset('creative-agency/vendor/datepicker/js/bootstrap-datepicker.js') }}"></script>
     <script type="text/javascript">
        $(function () {
        $('.date').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: "fa fa-chevron-left",
                next: "fa fa-chevron-right",
                today: "fa fa-screenshot",
                clear: "fa fa-trash",
                close: "fa fa-remove",
            }
        });
    });
    </script>
@endsection