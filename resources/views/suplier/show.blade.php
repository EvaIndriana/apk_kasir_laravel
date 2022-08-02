@extends('layouts.master')
@section('judul')
Aplikasi Kasir
@endsection
@section('judul_sub')
Data Lengkap Suplier
@endsection
@section('content')
<div class="h2 mb-3 text-center">Data Lengkap Suplier</div>
<hr style="width:75%">
<div class="card mb-4">
    <div class="card-header">
        Detail Data Lengkap Suplier
    </div>
    <div class="card-body">
        <div class="mb-3">
            <a href="{{ url('pdf-suplier-detail') }}/{{ $suplier->id }}"><button type="button"
                    class="btn btn-outline-danger"><i class="fas fa-file-pdf"></i></button></a>
            <a href="{{ url('print-suplier-detail')}}/{{ $suplier->id }}"><button type="button"
                    class="btn btn-outline-warning"><i class="fas fa-print"></i></button></a>
        </div>
        <h4 class="card-text"><b>ID Barang</b> : {{ $suplier->id }}</h4>
        <h4 class="card-text"><b>Nama Barang</b> : {{ $suplier->nama_barang }}</h4>
        <h4 class="card-text"><b>Nama Barang</b> : {{ $suplier->nama_barang }}</h4>
        <h4 class="card-text"><b>NO Telp</b> : {{$suplier->no_telp }}</h4>
        <h4 class="card-text"><b>Alamat</b> : {{ $suplier->alamat }}</h4>
    </div>
</div>
<a href="{{ url('suplier') }}" class="btn btn-danger">Kembali</a>
@endsection
