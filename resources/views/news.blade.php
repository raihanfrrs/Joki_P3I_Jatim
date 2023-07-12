@extends('layouts.main')

@section('section')
<div class="container-fluid">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Our News</h6>
            <h1 class="mb-4">Latest From News</h1>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('/') }}img/image-6.jpg" alt="">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                        style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                        <h4 class="font-weight-bold mb-n1">12</h4>
                        <small class="text-white text-uppercase">Jul</small>
                    </div>
                </div>
                <div class="bg-secondary" style="padding: 30px;">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                            <a class="text-muted ml-2" href="#">RizkyAkbare</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="#">Author</a>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3">P3I Mengadakan Acara Networking untuk Anggota Baru</h4>
                    <p>{{ Str::limit('Pada tanggal (tanggal acara), P3I mengadakan acara networking khusus bagi anggota baru. Acara ini bertujuan untuk memperkenalkan perusahaan-perusahaan anggota baru kepada anggota yang sudah ada sekaligus memfasilitasi kolaborasi dan pertukaran ide antar mereka.', 200, '...') }}</p>
                    <a class="border-bottom border-primary text-uppercase text-decoration-none" href="/news/p3i-mengadakan-acara-networking-untuk-anggota-baru">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 mb-5">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('/') }}img/image-7.jfif" alt="">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                        style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                        <h4 class="font-weight-bold mb-n1">10</h4>
                        <small class="text-white text-uppercase">Jun</small>
                    </div>
                </div>
                <div class="bg-secondary" style="padding: 30px;">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                            <a class="text-muted ml-2" href="#">RizkyAkbare</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="#">Author</a>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3">P3I Merayakan Tahun Keberhasilan dalam Industri Periklanan</h4>
                    <p>{{ Str::limit('P3I merayakan pencapaian penting dalam industri periklanan pada tanggal (tanggal perayaan). Acara ini diadakan sebagai apresiasi terhadap dedikasi dan kerja keras perusahaan-perusahaan anggota P3I dalam menciptakan kampanye periklanan yang sukses dan berdampak.', 200, '...') }}</p>
                    <a class="border-bottom border-primary text-uppercase text-decoration-none" href="/news/p3i-merayakan-tahun-keberhasilan-dalam-industri-periklanan">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('/') }}img/image-8.jfif" alt="">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                        style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                        <h4 class="font-weight-bold mb-n1">17</h4>
                        <small class="text-white text-uppercase">May</small>
                    </div>
                </div>
                <div class="bg-secondary" style="padding: 30px;">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                            <a class="text-muted ml-2" href="#">RizkyAkbare</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="#">Author</a>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3">P3I Membuka Pendaftaran Program Pelatihan Kreativitas Periklanan</h4>
                    <p>{{ Str::limit('P3I membuka pendaftaran untuk program pelatihan kreativitas periklanan yang akan diselenggarakan pada bulan (bulan pelatihan). Program ini ditujukan bagi para profesional periklanan yang ingin mengasah keterampilan kreatif mereka dalam menghasilkan ide-ide periklanan yang inovatif dan efektif.', 200, '...') }}</p>
                    <a class="border-bottom border-primary text-uppercase text-decoration-none" href="/news/p3i-membuka-pendaftaran-program-pelatihan-kreativitas-periklanan">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('/') }}img/image-9.jpg" alt="">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                        style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                        <h4 class="font-weight-bold mb-n1">03</h4>
                        <small class="text-white text-uppercase">Mar</small>
                    </div>
                </div>
                <div class="bg-secondary" style="padding: 30px;">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                            <a class="text-muted ml-2" href="#">RizkyAkbare</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="#">Author</a>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3">P3I Mendukung Kampanye Sosial Berkelanjutan dalam Industri Periklanan</h4>
                    <p>{{ Str::limit('P3I berkomitmen untuk mendukung kampanye sosial berkelanjutan dalam industri periklanan. Dalam rangka ini, P3I telah meluncurkan program inisiatif yang mengedepankan nilai-nilai sosial dan lingkungan dalam kampanye periklanan.', 200, '...') }}</p>
                    <a class="border-bottom border-primary text-uppercase text-decoration-none" href="/news/p3i-mendukung-kampanye-sosial-berkelanjutan-dalam-industri-periklanan">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection