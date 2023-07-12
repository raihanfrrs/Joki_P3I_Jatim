@extends('layouts.main')

@section('section')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Blog Detail Start -->
            <div class="pb-3">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('/') }}img/image-9.jpg" alt="">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                        style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                        <h4 class="font-weight-bold mb-n1">03</h4>
                        <small class="text-white text-uppercase">Mar</small>
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
                    <h4 class="font-weight-bold mb-3">P3I Mendukung Kampanye Sosial Berkelanjutan dalam Industri Periklanan</h4>
                    <p class="text-justify">P3I berkomitmen untuk mendukung kampanye sosial berkelanjutan dalam industri periklanan. Dalam rangka ini, P3I telah meluncurkan program inisiatif yang mengedepankan nilai-nilai sosial dan lingkungan dalam kampanye periklanan. Program ini bertujuan untuk mendorong perusahaan anggota P3I untuk menghasilkan kampanye yang tidak hanya efektif secara komersial, tetapi juga memiliki dampak positif bagi masyarakat dan lingkungan.</p>
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