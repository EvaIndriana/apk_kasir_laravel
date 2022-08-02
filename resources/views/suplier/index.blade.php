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
<a href="{{ url('suplier/create') }}"><button type="button" class="btn btn-outline-primary"><i
            class="fas fa-plus-square"></i></button></a>
<a href="{{ url('pdf-suplier') }}"><button type="button" class="btn btn-outline-danger"><i
            class="fas fa-file-pdf"></i></button></a>
<a href="{{ url('print-suplier') }}"><button type="button" class="btn btn-outline-warning"><i
            class="fas fa-print"></i></button></a>
<a href="{{ url('excel-suplier') }}"><button type="button" class="btn btn-outline-success"><i
            class="fas fa-file-excel"></i></button></a>
<div class="h2 mb-3 text-center">Data Suplier</div>
<hr style="width:75%">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kumpulan Data Suplier</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th >ID</th>
                        <th >Nama Suplier</th>
                        <th >Nama Barang</th>
                        <th >No Telp</th>
                        <th >Alamat</th>
                        <th>Waktu Dibuat</th>
                        <th>Waktu Diupdate</th>
                        <th >Aksi</th>

                    </tr>
                <tfoot>
                    </thead>
                    <tbody>
                        @if($suplier)
                        @foreach ($suplier as $item )
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->nama_suplier}}</td>
                            <td>{{ $item->nama_barang}}</td>
                            <td>{{ $item->no_telp}}</td>
                            <td>{{ $item->alamat}}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>

                        <td class="text-center">
                            <a href="/suplier/{{$item->id}}" class="btn btn-outline-info"><i
                                    class="fas fa-eye"></i></a>
                            @auth
                            <a href="/suplier/{{$item->id}}/edit" class="btn btn-outline-primary"><i
                                    class="far fa-edit"></i></a>

                            <form action="/suplier/{{$item->id}}" method="POST" class="display-non">
                                @csrf
                                @method('DELETE')
                                <button input type="submit" class="btn btn-outline-danger my-1" value="Delete"><i
                                        class="far fa-trash-alt"></i></button>
                            </form>
                            @endauth
                        </td>
                    </tr>
                    @endforeach
                    @endif
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
