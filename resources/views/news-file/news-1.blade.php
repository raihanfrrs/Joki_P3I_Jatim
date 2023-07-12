@extends('layouts.main')

@section('section')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Blog Detail Start -->
            <div class="pb-3">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('/') }}img/image-6.jpg" alt="">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                        style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                        <h4 class="font-weight-bold mb-n1">12</h4>
                        <small class="text-white text-uppercase">Jul</small>
                    </div>
                </div>
                <div class="bg-secondary mb-3" style="padding: 30px;">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{ asset('/') }}img/user.jpg" alt="">
                            <a class="text-muted ml-2" href="#">RizkyAkbare</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="#">Author</a>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3">P3I Mengadakan Acara Networking untuk Anggota Baru</h4>
                    <p class="text-justify">Pada tanggal (tanggal acara), P3I mengadakan acara networking khusus bagi anggota baru. Acara ini bertujuan untuk memperkenalkan perusahaan-perusahaan anggota baru kepada anggota yang sudah ada sekaligus memfasilitasi kolaborasi dan pertukaran ide antar mereka. Dalam acara ini, peserta dapat memperluas jaringan profesional, mendapatkan wawasan industri terbaru, dan menjalin kemitraan yang berpotensi untuk menghasilkan karya-karya periklanan yang inovatif dan kreatif.</p>
                </div>
            </div>
            <!-- Blog Detail End -->
        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4 mt-5 mt-lg-0">
            @include('news-file.news-sidebar')
        </div>
        <!-- Sidebar End -->
    </div>
</div>
@endsection