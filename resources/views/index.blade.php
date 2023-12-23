@extends('layouts.navbar')
@section('content')
    

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Beasiswa Tunas Muda Indonesia</h5>
                                <h1 class="display-3 text-white animated slideInDown">Beasiswa Tunas Muda Indonesia</h1>
                                <p class="fs-5 text-white mb-4 pb-2">MERAIH MASA DEPAN SUKSES BERSAMA BEASISWA TUNAS MUDA INDONESIA DENGAN MENJADI INSAN CERDAS DAN KOMPETITIF.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="/pendaftaran" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown"></h5>
                                <h1 class="display-3 text-white animated slideInDown">Beasiswa Tunas Muda Indonesia</h1>
                                <p class="fs-5 text-white mb-4 pb-2">.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-3 text-black-100 animated slideInDown text-center">Jenis Beasiswa</h1>  
            <div class="row g-4">
                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Beasiswa Akademik</h5>
                            <p>Beasiswa yang diberikan kepada mahasiswa yang berprestasi dalam bidang akademik</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Beasiswa Non-Akademik</h5>
                            <p>Beasiswa untuk mahasiswa berprestasi dalam bidang non-akademik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Beasiswa Akademik (TMI)</h1>
                    <p class="mb-4">Beasiswa Tunas Muda Indonesia membangun kecerdasan intelektual dan spiritual bagi putra dan putri bangsa. Visi indonesia emas di tahun 2045 telah dipersiapkan dengan dari saat ini.Beasiswa akademik adalah bantuan finansial yang diberikan kepada siswa berdasarkan prestasi akademik mereka, seperti nilai yang tinggi atau prestasi dalam mata pelajaran tertentu. Ini adalah penghargaan untuk dedikasi dan kerja keras siswa dalam bidang akademik. </p>
                    <p class="mb-4">Syarat dan ketentuan beasiswa akademik :</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>IPK Minimal <= 3,00</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Berprestasi dibidang akademik</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Berwarga Negara Indonesia</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pengumpulan Berkas</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate jika ada</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/pendaftaran">Daftar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- About Start-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Beasiswa Non-Akademik (TMI)</h1>
                    <p class="mb-4">Beasiswa Tunas Muda Indonesia membangun kecerdasan intelektual dan spiritual bagi putra dan putri bangsa. Visi indonesia emas di tahun 2045 telah dipersiapkan dengan dari saat ini.Beasiswa akademik adalah bantuan finansial yang diberikan kepada siswa berdasarkan prestasi akademik mereka, seperti nilai yang tinggi atau prestasi dalam mata pelajaran tertentu. Ini adalah penghargaan untuk dedikasi dan kerja keras siswa dalam bidang akademik. </p>
                    <p class="mb-4">Syarat dan ketentuan beasiswa non-akademik :</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>IPK Minimal <= 3,00</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Berprestasi dibidang non-akademik</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Berwarga Negara Indonesia</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pengumpulan Berkas</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate jika ada</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/pendaftaran">Daftar</a>
                </div>
            </div>
        </div>
    </div>
@endsection