@extends ('laraMoney.appMoney')

@section ('home') Home @endsection
@section ('index') Finance @endsection

@section ('content')

<div class="card">
    <div class="card-body">
        <a href="{{ Route('money.index') }}" class="btn btn-primary btn-md rounded-pill mt-0 mb-3"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        <div class="col-lg-12">
            <div class="container">
                <form action="{{ Route('money.store') }}" method="POST">{{ csrf_field() }}
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Finance</label>
                        <div class="col-sm-8">
                            <select class="custom-select my-1 mr-sm-2" name="operator" required autofocus>
                                <option value="" selected disabled>Pilih Finance</option>
                                <option value="pemasukkan">Pemasukkan</option>
                                <option value="pengeluaran">Pengeluaran</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="">Tanggal</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><span class="fas fa-calendar-alt"></span></div>
                                </div>
                                <input type="text" id="waktu" class="form-control" name="waktu" placeholder="select date" data-date-format="yyyy MM dd - HH:ii p" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="">Jumlah Uang</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><span class="fas fa-money-bill-alt"></span></div>
                                </div>
                                <input type="number" class="form-control" name="jumlah" placeholder="200XXX">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="keterangan" placeholder="minimal 4 karakter" required></textarea>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
@section('script')
     <script type="text/javascript">
        $('#waktu').datetimepicker({
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
    </script>
@endsection
@endsection