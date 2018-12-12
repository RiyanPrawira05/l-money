@extends ('laraMoney.appMoney')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Finance</h5>
        <p class="card-text text-muted">This is your financial record</p>

    <div class="col-lg-12">
        <div class="container">
            @include ('alerts.alert')
            <div class="masthead text-left masthead-content">
                <a href="{{ Route('money.create') }}" class="btn btn-primary btn-md rounded-pill mt-0 mb-3"><i class="fas fa-plus-circle"></i> Tambah</a>
            </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <form action="{{ Route('delete') }}" method="POST">{{ csrf_field() }}
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
                                <input type="checkbox" name="ceklis[]" id="ceklis" value="{{ $moneys->id }}">    
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
                                <a href="{{ Route('money.edit', $moneys->id) }}" class="btn btn-secondary btn-md rounded-pill mt-0 mb-3"><i class="fas fa-edit"></i> Edit</a>
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
                        <button type="submit" class="btn btn-danger btn-md rounded-pill mt-0 mb-3"><span class="fas fa-trash"></span> Delete</button>
                </form>
            </div>
                <div class="masthead mt-2 mb-2"> 
                    {!! $money->links('pagination.custom') !!}
                </div>
            </div>
        </div>
    </div>
@endsection