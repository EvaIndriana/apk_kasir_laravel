@extends('layouts.master')
@push('style')
<script src="https://cdn.tiny.cloud/1/uf5lkyxtnybuxubv009ys4y6al6h3c4zghyfd2o1lori9hwx/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
@endpush
@section('judul')
Aplikasi Kasir | Project UTS
@endsection
@section('judul_sub')
Tambah Data Suplier
@endsection
@section('content')
<div class="h2 mb-3 text-center">Tambah Data Suplier</div>
<hr style="width:75%">
<form action="/suplier" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="id"> Nama Suplier</label>
        <input type="text" class="form-control" name="nama_suplier" id="nama_suplier" placeholder="Masukkan Nama Suplier">
        @error('nama_suplier')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukkan Nama Barang">
        @error('nama_barang')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat"
            placeholder="Masukkan Alamat Suplier">
        @error('alamat')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="nama_barang">NO Telp</label>
        <input type="text" class="form-control" name="no_telp" id="no_telp"
            placeholder="Masukkan No Telp">
        @error('no_telp')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
    <a href="{{ url('suplier') }}" class="btn btn-danger">Kembali</a>
</form>
@push('scripts')
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
</script>
@endpush
@endsection
