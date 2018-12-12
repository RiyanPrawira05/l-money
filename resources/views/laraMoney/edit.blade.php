@extends ('laraMoney.appMoney')
@section ('content')
<div class="card">
    <div class="card-body">
        <a href="{{ Route('money.index') }}" class="btn btn-primary btn-md rounded-pill mt-0 mb-5"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        <div class="col-lg-12">
            <div class="container">
                <form action="{{ Route('money.update', $money->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group row">
                        <label for="operator" class="col-sm-2 col-form-label">Finance</label>
                        <div class="col-sm-8">
                            <select class="custom-select my-1 mr-sm-2" name="operator" id="operator" required autofocus>
                                <option value="" selected disabled>Pilih Finance</option>
                                <option value="pemasukkan" {{ $money->operator == '+' ? 'selected' : '' }}>Pemasukkan</option>
                                <option value="pengeluaran" {{ $money->operator == '-' ? 'selected' : '' }}>Pengeluaran</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="jumlah">Jumlah uang</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="jumlah" placeholder="Rp. 200XXX" id="jumlah" value="{{ $money->jumlah }}">
                                <div class="input-group-prepend">
                                    <label for="jumlah"><span class="btn btn-dark"><i class="fas  fa-money-bill-alt"></i></span></button></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="waktu">Date time</label>
                        <div class="col-sm-8">
                            <div class="input-group-append date">
                            <input type="text" id="waktu" class="form-control custom" name="waktu" placeholder="Select Date Time" data-date-format="dd M yyyy, HH:ii p" autocomplete="off" value="{{ \Carbon\Carbon::parse($money->waktu)->format('d M Y, H:i') }}" readonly required>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary"><span class="add-on"><i class="fas fa-backspace icon-remove"></i></span></button>
                                    <button type="button" class="btn btn-secondary"><span class="add-on"><i class="fas fa-calendar-alt icon-th"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="keterangan" id="keterangan" placeholder="minimal 4 karakter" required>{{ $money->keterangan }}</textarea>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-danger btn-md rounded-pill mt-1 mb-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
@section('script')
     <script type="text/javascript">
        $('.date').datetimepicker({
            weekStart: 1,
            todayBtn:  true,
            autoclose: true,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: true,
            pickerPosition: 'top-left',
            keyboardNavigation: true,
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