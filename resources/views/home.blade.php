@extends('layouts.master')
@section('judul')
Aplikasi Kasir | Project UTS
@endsection
@section('judul_sub')
Halaman Utama Sesudah Login
@endsection
@section('content')
<div class="h2 mb-3 text-center">Halaman Utama</div>
<hr style="width:75%">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Aplikasi Kasir Sederhana</h6>
    </div>
    <div class="card-body">
        <div class="h4">Project uts - Aplikasi Kasir berbasis WEB (Laravel Project)</h4>
        </div>
        <hr style="width:200%"> <h5>Project Uts Kelompok <br>
        dikerjakan oleh : </h5>
        <h6>Eva Indriana Juansyah</h6>
        <h6>Muhammad Agung Gumelar</h6>
</div>
<div class="col-lg-6 col-xl-7">
    <div class="image-container">
        <img class="img-fluid" style="width: 10000px;" src="{{ asset('zinc') }}/images/decoration-city.svg"
            alt="alternative">
@endsection
