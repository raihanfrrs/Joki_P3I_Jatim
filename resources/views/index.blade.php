@extends('layouts.main')

@section('section')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="{{ asset('/') }}img/image-4.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">ABOUT US</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">About</h6>
                    <h1 class="mb-4">About Us</h1>
                    <p class="mb-4">
                        <p class="text-justify">
                            P3I, yang merupakan singkatan dari Persatuan Perusahaan Periklanan Indonesia, adalah sebuah organisasi yang mewadahi perusahaan-perusahaan periklanan di Indonesia. Tujuan utama P3I adalah untuk memajukan industri periklanan dalam negeri dan menjaga standar profesionalisme di dalamnya. Melalui berbagai kegiatan, P3I berusaha mengembangkan komunitas periklanan yang kuat dan berperan aktif dalam memajukan industri ini.
                        </p>

                        <p class="text-justify">
                            Salah satu peran utama P3I adalah memfasilitasi kolaborasi antara perusahaan-perusahaan anggotanya. Dalam sebuah industri yang terus berkembang seperti periklanan, kolaborasi menjadi kunci untuk menciptakan kampanye yang kreatif dan efektif. P3I menyediakan platform dan forum di mana perusahaan-perusahaan anggotanya dapat bertukar ide, berbagi pengetahuan, dan saling mendukung dalam menghadapi tantangan yang ada.
                        </p>

                        <span class="text-primary"><a href="/about">See More...</a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid bg-secondary pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Services</h6>
                <h1 class="mb-4">Our Services</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fab fa-2x fa-wpforms text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Forum dan Pertemuan</h6>
                    </div>
                    <p>{{ Str::limit('P3I menyelenggarakan forum dan pertemuan berkala di mana perusahaan-perusahaan anggota dapat bertukar ide, berbagi pengalaman, dan menjalin kemitraan.', 75, '...') }}</p>
                    <a class="border-bottom text-decoration-none" href="/service">Read More</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fas fa-2x fa-chalkboard-teacher text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Pendidikan dan Pelatihan</h6>
                    </div>
                    <p>{{ Str::limit('P3I menyediakan program pendidikan dan pelatihan untuk meningkatkan keterampilan dan pengetahuan para profesional periklanan.', 75, '...') }}</p>
                    <a class="border-bottom text-decoration-none" href="/service">Read More</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fas fa-2x fa-calendar-week text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Penghargaan dan Kompetisi</h6>
                    </div>
                    <p>{{ Str::limit('P3I juga mengadakan penghargaan dan kompetisi periklanan, seperti Piala Citra, yang bertujuan untuk menghargai dan mengakui keunggulan dalam industri periklanan.', 75, '...') }}</p>
                    <a class="border-bottom text-decoration-none" href="/service">Read More</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-store text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Advokasi dan Hubungan Masyarakat</h6>
                    </div>
                    <p>{{ Str::limit('P3I berperan sebagai wakil perusahaan-perusahaan periklanan dalam hubungan dengan pemerintah dan masyarakat.', 75, '...') }}</p>
                    <a class="border-bottom text-decoration-none" href="/service">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="{{ asset('/') }}img/image-5.jpeg" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Contact</h6>
                    <h1 class="mb-4">P3I PUSAT</h1>
                    <p class="mb-4">P3I Pusat adalah kantor pusat P3I yang berada di Jakarta. Jika Anda ingin mendapatkan informasi lebih lanjut tentang keanggotaan, program, atau layanan yang disediakan oleh P3I, Anda dapat menghubungi nomor telepon atau mengirim email ke alamat yang tercantum di bawah.</p>
                    <ul class="list-inline">
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Jl. Kuningan Barat No. 8, Mampang Prapatan, Jakarta Selatan, Indonesia</h6>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>+62 21 12345678</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>info@p3i-indonesia.org</h6></li>
                    </ul>
                    <a href="/contact" class="btn btn-primary mt-3 py-2 px-4">See More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Team Start -->
    <div class="container-fluid bg-secondary pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Team</h6>
                <h1 class="mb-4">Our Team</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/background.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Haries Purwoko</h5>
                                <span>Ketua Umum</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/background.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Drs. Agus Winoto</h5>
                                <span>Sekretaris Umum</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/background.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Eko Suhariyadi</h5>
                                <span>Ketua 1 Pendidikan Pengembangan</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/background.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Rinto TPM</h5>
                                <span>Ketua 2 Media Luar Ruang</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center pb-5">
                <a href="/team" class="text-primary">See More...</a>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid pt-5">
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
            </div>
            <div class="text-center pb-5">
                <a href="/news" class="text-primary">See More...</a>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection