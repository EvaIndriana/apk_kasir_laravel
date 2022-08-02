@extends('layouts.master')
@push('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css" />
@endpush
@section('judul')
Aplikasi Kasir | Project UTS
@endsection
@section('judul_sub')
Data Suplier
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Join</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>

                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Satuan</th>
                        <th scope="col">Nama Suplier</th>


                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item )
                        <tr>

                            <td>{{ $item->nama_barang}}</td>
                            <td>{{ $item->harga_satuan}}</td>
                            <td>{{ $item->nama_suplier}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(function () {
    $("#example1").DataTable();
  });
</script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>
@endpush
@endsection
