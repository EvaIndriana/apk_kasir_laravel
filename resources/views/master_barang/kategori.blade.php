@extends('layouts.master')
@push('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css" />
@endpush
@section('judul')
Aplikasi Kasir | Project UTS
@endsection
@section('judul_sub')
Data Barang
@endsection
@section('content')

<a href="{{ url('master_barang/addkategori') }}"><button type="button" class="btn btn-outline-primary"><i
    class="fas fa-plus-square"></i></button></a>
<a href="{{ url('master-barang') }}"><button type="button" class="btn btn-outline-primary">Kembali</button></a>

<div class="h2 mb-3 text-center">Data Kategori</div>
<hr style="width:75%">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kumpulan Data Kategori</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Waktu Dibuat</th>
                        <th>Waktu Diupdate</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Waktu Dibuat</th>
                        <th>Waktu Diupdate</th>

                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($kategori as $item => $key)
                    <tr>
                        <td>{{ $item + 1 }}</td>
                        <td>{{ $key->nama_kategori }}</td>
                        <td>{{ $key->created_at }}</td>
                        <td>{{ $key->updated_at }}</td>

                    @endforeach
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
