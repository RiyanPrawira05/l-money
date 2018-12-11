@extends ('laraMoney.appMoney')

@section ('home') Home @endsection
@section ('index') Finance @endsection

@section ('content')

<div class="card">
    <div class="card-body">
        <a href="{{ Route('money.index') }}" class="btn btn-primary btn-md rounded-pill mt-0 mb-3">Back</a>
        <div class="col-lg-12">
            <div class="container">
                <form>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Finance</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="operator" required autofocus>
                                <option value="pemasukkan" selected>Pemasukkan</option>
                                <option value="pengeluaran">Pengeluaran</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Jumlah Uang</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" placeholder="" name="jumlah" required autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="keterangan" placeholder="" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="waktu">
                        </div>
                    </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
@endsection