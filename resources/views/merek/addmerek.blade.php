@extends('layouts.master')
@push('style')
<script src="https://cdn.tiny.cloud/1/uf5lkyxtnybuxubv009ys4y6al6h3c4zghyfd2o1lori9hwx/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
@endpush
@section('judul')
Aplikasi Kasir | Project UTS
@endsection
@section('judul_sub')
Tambah Data Barang
@endsection
@section('content')
<div class="h2 mb-3 text-center">Tambah Data Merek</div>
<hr style="width:75%">
<form action="{{ url('merekmerek')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nama_merek">Merek</label>
        <input type="text" class="form-control" name="nama_merek" id="nama_merek" placeholder="Masukkan Nama Barang">
        @error('nama_merek')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
    <a href="{{ url('master_barang/merek') }}" class="btn btn-danger">Kembali</a>
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
