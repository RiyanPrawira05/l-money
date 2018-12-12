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
            <a href="{{ Route('money.create') }}" class="btn btn-danger btn-md rounded-pill mt-0 mb-3"><i class="fas fa-plus-circle"></i> Tambah</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Finance</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col"><span class="fas fa-cog"></span></th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($money) > 0)
                    @foreach ($money as $moneys)
                        <tr>
                            <td>
                                <input type="checkbox" name="ceklis">    
                            </td>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ \Carbon\Carbon::parse($moneys->waktu)->format('d M Y, h:i') }}</td>
                            <td>{{ $moneys->operator == '+' ? 'Pemasukkan' : 'Pengeluaran' }}</td>
                            @if ($moneys->operator == '+')
                                <td><p class="text-success">{{ $moneys->operator }} {{ $moneys->jumlah }}</p></td>
                            @else
                                <td><p class="text-danger">{{ $moneys->operator }} {{ $moneys->jumlah }}</p></td>
                            @endif
                            <td>{{ $moneys->keterangan }}</td>
                            <td>
                                <form action="" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <button type="submit" class="btn btn-dark btn-md rounded-pill mt-0 mb-3"><span class="fas fa-edit"></span> Edit</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Danger !</strong> Your finance is empty, <a href="{{ Route('money.create') }}" class="alert-link">click here</a> for add and record your finance
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </tbody>
            </table>
                <a href="" class="btn btn-primary btn-md rounded-pill mt-0 mb-3"><i class="fas fa-trash"></i> Delete</a>
        </div>
            {{ $money->links('pagination.custom') }}
    </div>
</div>
@endsection