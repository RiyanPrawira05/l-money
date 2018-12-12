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
                        <label for="operator" class="col-sm-2 col-form-label">Finance</label>
                        <div class="col-sm-8">
                            <select class="custom-select my-1 mr-sm-2" name="operator" id="operator" required autofocus>
                                <option value="" selected disabled>Pilih Finance</option>
                                <option value="pemasukkan">Pemasukkan</option>
                                <option value="pengeluaran">Pengeluaran</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="waktu">Date time</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" id="waktu" class="form-control" name="waktu" placeholder="select date" data-date-format="yyyy-mm-dd, HH:ii p" autocomplete="off" required>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="waktu"><span class="fas fa-calendar-alt"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="jumlah">Jumlah uang</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="jumlah" placeholder="Rp. 200XXX" id="jumlah">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="jumlah"><span class="fas fa-money-bill-alt"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="keterangan" id="keterangan" placeholder="minimal 4 karakter" required></textarea>
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
    <script type="text/javascript">
        $("#jumlah").maskMoney({ 
            thousands:'.', 
            decimal:',', 
            allowZero:true, 
            prefix: 'Rp'
        });

    </script>
@endsection
@endsection