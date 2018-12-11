@extends ('laraMoney.appMoney')

@section ('home') Home @endsection
@section ('index') Finance @endsection

@section ('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Finance</h5>
        <p class="card-text text-muted">This is your financial record</p>

    <div class="col-lg-12">
        <div class="container">
            <a href="{{ Route('money.create') }}" class="btn btn-danger btn-md rounded-pill mt-0 mb-3">Add</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Finance</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
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
@endsection