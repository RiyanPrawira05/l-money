@extends ('laraMoney.appMoney')
@section ('content')
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('material-kit/assets/img/bg2.jpg');">
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
                <a class="nav-link" href="{{ Route('home.finance') }}"><i class="material-icons">table_chart</i> Tables</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ Route('create.finance') }}"><i class="material-icons">alarm_add</i> Buat Record</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
    <a href="{{ Route('home.finance') }}" class="btn btn-primary btn-fab btn-fab-mini btn-round"><span class="material-icons">keyboard_arrow_left</span></a>
    <h4 class="card-title">Forms<h4>
        <p class="card-text mb-4">Write and save your finances here,</p>
        @include ('alerts.alert')
            <div class="col-lg-12">
                <div class="container">
                    <form action="{{ Route('added.finance') }}" method="POST">{{ csrf_field() }}
                        <div class="form-group">
                            <label for="operator">Finance</label>
                                <select class="form-control" name="operator" id="operator" required autofocus>
                                    <option value="" selected disabled>Pilih Finance</option>
                                    <option value="pemasukkan">Pemasukkan</option>
                                    <option value="pengeluaran">Pengeluaran</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Money</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp" data-prefix="Rp " data-thousands="." data-decimal="," required>
                                <small id="emailHelp" class="form-text text-muted">Enter the amount of your money here</small>
                            </div>
                            <div class="form-group">
                                <label class="label-control" for="waktu">Datetime</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control date" name="waktu" id="waktu" required>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Select Date time</small>
                            </div>
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
                                <small id="emailHelp" class="form-text text-muted">minimal 4 karakter</small>
                            </div>
                                <button type="submit" class="btn btn-danger btn-round mt-2 mb-3">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('script')
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
            },

        showTodayButton: true,
        toolbarPlacement: 'bottom',
        showClose: true

        });
    });

    $('#jumlah').maskMoney({ precision: 0 });
</script>
@endsection