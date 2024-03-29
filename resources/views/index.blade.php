@extends('laymas')
@extends('wa')
@section('content')
    <style>
        @media (max-width: 768px) {
            .judul-type-rumah h2 {
                font-size: 18px;
            }

            .card {
                width: 100%;
            }

            @media (max-width: 768px) {
                .card {
                    margin-bottom: 20px;
                }

                .judul-type-rumah h2,
                .keunggulan h3,
                .pilihan .judul-pilihan p {
                    font-size: 16px;
                    /* Adjust the font size on smaller screens */
                }

                .card-body p,
                .judul-lokasi h6,
                .text-card p {
                    font-size: 12px;
                    /* Smaller text in cards and titles */
                }
            }
        }

        /* Base styles for the utama section */


        @media (max-width: 768px) {
            .container-fasilitas {
                background-image: url('img/img-fasilitas.png');
                height: 98vh;
            }

            .konten-fasilitas {
                padding: 2rem;
            }

            .judul-type-rumah h2 {
                font-size: 28px
            }

            .judul-type-rumah p {
                font-size: 14px
            }

            .judul-type-rumah {
                border-left: 15px solid rgb(255, 165, 0);
            }

            .text-box-keunggulan {
                width: 320px;
            }
        }

        @media (max-width: 414px) {
            .gambar-keunggulan {
                margin-top: 2rem;
                width: 300px;
                height: 300px;
            }
        }
    </style>
    <section id="utama">
        <img src="{{ asset('img/desktoplanding.jpg') }}" class="desktop-image img-fluid" alt="">
        <img src="{{ asset('img/mobilelanding.jpg') }}" class="mobile-image img-fluid" alt="">
    </section>

    {{-- <section id="fasilitas">
        <div class="container-fasilitas container-fluid" style="background-image: url('./img/img-fasilitas.png');">
            <div class="color-overlay-fasilitas container-fluid">
                <div class="konten-fasilitas row d-flex justify-content-center align-items-center">
                    <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="fasilitas-item">
                            <img src="{{ asset('img/fasilitas-text.png') }}" class="img-fluid w-100 mb-3" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="fasilitas-item">
                            <img src="{{ asset('img/icon-cctv.png') }}" class="img-fluid w-100" alt="">
                            <p class="d-flex justify-content-center">CCTV</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="fasilitas-item">
                            <img src="{{ asset('img/icon-taman.png') }}" class="img-fluid w-100" alt="">
                            <p class="d-flex justify-content-center">Taman Anak</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="fasilitas-item">
                            <img src="{{ asset('img/icon-security.png') }}" class="img-fluid w-100" alt="">
                            <p class="d-flex justify-content-center mb-sm-3">Keamanan 24 Jam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> --}}

    <section id="fasilitas">
        <div class="container-fasilitas container-fluid" style="background-image: url('./img/img-fasilitas.png');">
            <div class="color-overlay-fasilitas container-fluid">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="fasilitas-item">
                            <img src="{{ asset('img/fasilitas-text.png') }}" class="img-fluid w-100 mb-3" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="fasilitas-item">
                            <img src="{{ asset('img/icon-cctv.png') }}" class="img-fluid w-100" alt="">
                            <p class="d-flex justify-content-center">CCTV</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="fasilitas-item">
                            <img src="{{ asset('img/icon-taman.png') }}" class="img-fluid w-100" alt="">
                            <p class="d-flex justify-content-center">Taman Anak</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="fasilitas-item">
                            <img src="{{ asset('img/icon-security.png') }}" class="img-fluid w-100" alt="">
                            <p class="d-flex justify-content-center">Keamanan 24 Jam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- <section id="type-rumah">
        <div class="container-fluid" style="background-color: #092947">
            <div class="row mb-lg-2 mb-sm-4">
                <div class="judul-type-rumah p-1">
                    <div class="row">
                        <h2>MUTIARA RESIDENCE</h2>
                    </div>
                    <p>Jalan Kunir Raya No. 48A Kel. Pondok Cabe Udik, Kec. Pamulang, Tangerang Selatan</p>
                </div>
            </div>
            <div class="box-card p-3 d-flex justify-content-sm-center align-items-sm-center">
                <div class="type-rumah-box row">
                    <div
                        class="col-lg-5 d-flex mb-3 justify-content-lg-center justify-content-sm-center align-items-lg-center">
                        <div class="card mt-2" style="width: 20rem;">
                            <img src="{{ asset('img/home-1.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="box-type">
                                            <h4 class="p-1" style="font-size: 12px">Tipe Lantai 1</h4>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <p><b>Luas Bangunan (72 m2)</b></p>
                                        <p><b>Luas Tanah (84 m2)</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-2 mb-3 d-flex justify-content-lg-center justify-content-sm-center align-items-lg-center">
                        <img src="{{ asset('img/harga1m.png') }}" class="img-fluid" alt="">
                    </div>
                    <div
                        class="col-lg-5 mb-3 d-flex justify-content-lg-center justify-content-sm-center align-items-lg-center">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('img/home-1.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="box-type">
                                            <h4 class="p-1" style="font-size: 12px">Tipe Lantai 1</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <p><b>Luas Bangunan (72 m2)</b></p>
                                        <p><b>Luas Tanah (84 m2)</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="type-rumah">
        <div class="container-fluid" style="background-color: #092947">
            <div class="row mb-2">
                <div class="judul-type-rumah p-2">
                    <div class="row">
                        <h2>MUTIARA RESIDENCE</h2>
                    </div>
                    <div class="row">
                        <p>Jalan Kunir Raya No. 48A Kel. Pondok Cabe Udik, Kec. Pamulang, Tangerang Selatan</p>
                    </div>
                </div>
            </div>
            {{-- <div class="box-card p-3">
                <div class="row">
                    <div class="col-lg-5 p-2 d-flex justify-content-lg-center justify-content-center align-items-lg-center">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('img/home-1.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body" style="background-color: #eaeaea">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="box-type">
                                            <h4 class="p-1" style="font-size: 12px">Tipe Lantai 1</h4>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <p><b>Luas Bangunan (72 m2)</b></p>
                                        <p><b>Luas Tanah (84 m2)</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 p-2 d-flex justify-content-lg-center justify-content-center align-items-lg-center">
                        <img src="{{ asset('img/harga1m.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 p-2 d-flex justify-content-lg-center justify-content-center align-items-lg-center">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('img/home-1.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body" style="background-color: #eaeaea">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="box-type">
                                            <h4 class="p-1" style="font-size: 12px">Tipe Lantai 1</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <p><b>Luas Bangunan (72 m2)</b></p>
                                        <p><b>Luas Tanah (84 m2)</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="box-card p-3">
                <div class="row">
                    <div class="col-lg-5 p-2 d-flex justify-content-lg-center justify-content-center align-items-lg-center">
                        <div class="card" style="width: 20rem;">
                            {{-- <img src="{{ asset('img/home-1.jpg') }}" class="card-img-top" alt=""> --}}
                            <div class="card-img-top">
                                <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('img/home-1.jpg') }}" class="img-carousel d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/home-1a.jpeg') }}" class="img-carousel  d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/home-1.jpg') }}" class="img-carousel d-block w-100" alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body" style="background-color: #eaeaea">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="box-type">
                                            <h4 class="p-1" style="font-size: 12px">Tipe Lantai 1</h4>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <p><b>Luas Bangunan (72 m2)</b></p>
                                        <p><b>Luas Tanah (84 m2)</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-2 p-2 d-flex justify-content-lg-center justify-content-center align-items-lg-center">
                        <img src="{{ asset('img/harga1m.png') }}" class="img-harga img-fluid" alt="">
                    </div>
                    <div
                        class="col-lg-5 p-2 d-flex justify-content-lg-center justify-content-center align-items-lg-center">
                        <div class="card" style="width: 20rem;">
                            {{-- <img src="{{ asset('img/home-1.jpg') }}" class="card-img-top" alt=""> --}}
                            <div class="card-img-top">
                                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('img/home-2.jpg') }}" class="img-carousel d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/home-2a.jpg') }}" class="img-carousel d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/home-2.jpg') }}" class="img-carousel d-block w-100"
                                                alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                            </div>
                            <div class="card-body" style="background-color: #eaeaea">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="box-type">
                                            <h4 class="p-1" style="font-size: 12px">Tipe Lantai 1</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <p><b>Luas Bangunan (72 m2)</b></p>
                                        <p><b>Luas Tanah (84 m2)</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="keunggulan">
        <div class="keunggulan">
            <div class="color-overlay-keunggulan d-flex">
                <div class="row">
                    <div class="img-keunggulan col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
                        <img src="img/img-keunggulan.png" class="gambar-keunggulan img-fluid" width="350" height="400"
                            alt="">
                    </div>
                    <div class="deskripsi-keunggulan col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="centered-text-box">
                            <h3 style="color: #FFA500"><b>Keunggulan</b></h3>
                            <h5 style="color: #2173C0">Pelayanan yang Kami Berikan untuk Anda</h5>
                            <p class="mb-3" style="color: #8C8B8B">Kami selalu siap membantu dengan memberikan layanan
                                terbaik untuk Anda.</p>
                            <div class="text-box-keunggulan">
                                <div class="row d-flex align-items-center">
                                    <div class="col-2">
                                        <i><img src="/img/icon-keunggulan.png" class="icon-keunggulan" alt=""></i>
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <p>Penawaran dan Pelayanan Terbaik</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-box-keunggulan">
                                <div class="row d-flex align-items-center">
                                    <div class="col-2">
                                        <i><img src="/img/icon-keamanan.png" class="icon-keunggulan" alt=""></i>
                                    </div>
                                    <div class="col-10">
                                        <p>Keamanan 24 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-box-keunggulan">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-2">
                                        <i><img src="/img/icon-3.png" class="icon-keunggulan" alt=""></i>
                                    </div>
                                    <div class="col-10">
                                        <p>Harga terbaik di pasaran</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="keunggulan">
        <div class="keunggulan">
            <div class="color-overlay-keunggulan d-flex">
                <div class="row">
                    <div class="img-keunggulan col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
                        <img src="img/img-keunggulan.png" width="350" height="400" alt="">
                    </div>
                    <div class="deskripsi-keunggulan col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="centered-text-box">
                            <h3 style="color: #FFA500"><b>Keunggulan</b></h3>
                            <h5 style="color: #2173C0">Pelayanan yang Kami Berikan untuk Anda</h5>
                            <p class="mb-3" style="color: #8C8B8B">Kami selalu siap membantu dengan memberikan layanan
                                terbaik untuk Anda.</p>
                            <div class="text-box-keunggulan">
                                <div class="row d-flex align-items-center">
                                    <div class="col-2">
                                        <i><img src="/img/icon-keunggulan.png" class="icon-keunggulan"
                                                alt=""></i>
                                    </div>
                                    <div class="col-10">
                                        <p>Penawaran dan Pelayanan Terbaik</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-box-keunggulan">
                                <div class="row d-flex align-items-center">
                                    <div class="col-2">
                                        <i><img src="/img/icon-keamanan.png" class="icon-keunggulan" alt=""></i>
                                    </div>
                                    <div class="col-10">
                                        <p>Keamanan 24 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-box-keunggulan">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-2">
                                        <i><img src="/img/icon-3.png" class="icon-keunggulan" alt=""></i>
                                    </div>
                                    <div class="col-10">
                                        <p>Harga terbaik di pasaran</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="artikel">
        <div class="pt-3" style="background-color: #092947;">
            <div class="container">
                <h4 class="text-white text-center mb-4">Artikel</h4>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="width: auto;">
                            <img src="{{ asset('img/artikel-1.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Perumahan Elite Terjangkau Jakarta, Mutiara Residance!</h5>
                                <p class="card-text">09 Maret 2024</p>
                                <a href="#" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="width: auto;">
                            <img src="{{ asset('img/artikel-2.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Masih Ragu? Ini Keuntungan Memiliki Rumah Cluster</h5>
                                <p class="card-text">09 Maret 2024</p>
                                <a href="#" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="width: auto;">
                            <img src="{{ asset('img/artikel-3.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Inspirasi Warna Cat Rumah yang Cantik nan Populer</h5>
                                <p class="card-text">09 Maret 2024</p>
                                <a href="#" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="artikel">
        <div class="pt-3" style="background-color: #092947;">
            <div class="container">
                <h4 class="text-white text-center mb-4">Artikel</h4>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="background-color: transparent; width: auto;">
                            <img src="{{ asset('img/artikel-1.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="{{ url('/artikel/perumahan-elit') }}">
                                    <h5 class="card-title">Perumahan Elite Terjangkau Jakarta, Mutiara Residance!</h5>
                                </a>
                                <p class="card-text" style="color: #eaeaea">09 Maret 2024</p>
                                <a href="{{ url('/artikel/perumahan-elit') }}" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="background-color: transparent; width: auto;">
                            <img src="{{ asset('img/artikel-2.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="{{ url('/artikel/masih-ragu') }}">
                                    <h5 class="card-title">Masih Ragu? Ini Keuntungan Memiliki Rumah Cluster</h5>
                                </a>
                                <p class="card-text" style="color: #eaeaea">09 Maret 2024</p>
                                <a href="{{ url('/artikel/masih-ragu') }}" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="background-color: transparent; width: auto;">
                            <img src="{{ asset('img/artikel-3.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="{{ url('/artikel/inspirasi-cat') }}">
                                    <h5 class="card-title">Inspirasi Warna Cat Rumah yang Cantik nan Populer</h5>
                                </a>
                                <p class="card-text" style="color: #eaeaea">09 Maret 2024</p>
                                <a href="{{ url('/artikel/inspirasi-cat') }}" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="portfolio">
        <div class="container-fluid p-2" style="background-color: #092947;">
            <style>
                .embed-responsive {
                    position: relative;
                    width: 50%;
                    padding-top: 56.25%;
                    /* 16:9 Aspect Ratio */
                }

                .embed-responsive iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    width: 50%;
                    height: 50%;
                    border: none;
                    /* Optional: Removes the default iframe border */
                    border-radius: 10px;
                    /* Optional: Adds rounded corners to the iframe */
                }
            </style>

            <div class="embed-responsive">
                <iframe src="https://www.youtube.com/embed/7aQrYNcpJDs" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section> --}}

    <section id="portfolio">
        <div class="container-fluid p-2" style="background-color: #092947;">
            <style>
                .embed-responsive {
                    position: relative;
                    width: 100%;
                    padding-top: 56.25%;
                    /* 16:9 Aspect Ratio */
                }

                .embed-responsive iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                    /* Optional: Removes the default iframe border */
                    border-radius: 10px;
                    /* Optional: Adds rounded corners to the iframe */
                }
            </style>

            <div class="embed-responsive">
                <iframe src="https://www.youtube.com/embed/7aQrYNcpJDs" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    {{-- <section id="pilihan" style="background-color: #092947;">
        <div class="container">
            <div class="text-center p-3">
                <h4 style="color: #FFA500;">Pilihan Terbaik</h4>
                <h5 style="color: white;">Residence Populer</h5>
            </div>
            <div class="row justify-content-center">
                <!-- Column setup for responsive behavior -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-1.png') }}" class="card-img-top img-fluid" alt="Matoa 1">
                        <div class="card-body">
                            <h5 class="card-title"><b>Matoa 1</b></h5>
                            <p class="card-text" style="color: #8C8B8B;">Jl. Aselih No.85, Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-2.png') }}" class="card-img-top img-fluid" alt="Matoa 2">
                        <div class="card-body">
                            <h5 class="card-title"><b>Matoa 2</b></h5>
                            <p class="card-text" style="color: #8C8B8B;">Jl. Aselih No.111, Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-3.png') }}" class="card-img-top img-fluid" alt="Jagakarsa">
                        <div class="card-body">
                            <h5 class="card-title"><b>Jagakarsa</b></h5>
                            <p class="card-text" style="color: #8C8B8B;">Jl. Panjang No.24 Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-4.png') }}" class="card-img-top img-fluid" alt="Rawa Kopi">
                        <div class="card-body">
                            <h5 class="card-title"><b>Rawa Kopi</b></h5>
                            <p class="card-text" style="color: #8C8B8B;">Jl. Rw. Kopi, Pangkalan Jati, Cinere, Depok City,
                                West Java</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-5.png') }}" class="card-img-top img-fluid" alt="Pondok Cabe">
                        <div class="card-body">
                            <h5 class="card-title"><b>Pondok Cabe</b></h5>
                            <p class="card-text" style="color: #8C8B8B;">Jl. Kunir No.48A, Pd. Cabe Udik, Kec. Pamulang,
                                Kota Tangerang Selatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="pilihan" style="background-color: #eaeaea;">
        <div class="container-fluid">
            <div class="p-3">
                <h4 style="color: #FFA500;">Pilihan Terbaik</h4>
                <h5 style="color: black;">Residence Populer</h5>
            </div>
            <div class="row justify-content-center">
                <!-- Column setup for responsive behavior -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-1.png') }}" class="card-img-top img-fluid" alt="Matoa 1">
                        <div class="card-body">
                            <h5 class="card-title"><b>Matoa 1</b></h5>
                            <p class="card-text" style="color: black;">Jl. Aselih No.85, Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-2.png') }}" class="card-img-top img-fluid" alt="Matoa 2">
                        <div class="card-body">
                            <h5 class="card-title"><b>Matoa 2</b></h5>
                            <p class="card-text" style="color: black;">Jl. Aselih No.111, Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-3.png') }}" class="card-img-top img-fluid" alt="Jagakarsa">
                        <div class="card-body">
                            <h5 class="card-title"><b>Jagakarsa</b></h5>
                            <p class="card-text" style="color: black;">Jl. Panjang No.24 Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-4.png') }}" class="card-img-top img-fluid" alt="Rawa Kopi">
                        <div class="card-body">
                            <h5 class="card-title"><b>Rawa Kopi</b></h5>
                            <p class="card-text" style="color: black;">Jl. Rw. Kopi, Pangkalan Jati, Cinere, Depok City,
                                West Java</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-5.png') }}" class="card-img-top img-fluid" alt="Pondok Cabe">
                        <div class="card-body">
                            <h5 class="card-title"><b>Pondok Cabe</b></h5>
                            <p class="card-text" style="color: black;">Jl. Kunir No.48A, Pd. Cabe Udik, Kec. Pamulang,
                                Kota Tangerang Selatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="lokasi-fasilitas">
        <div class="container-fluid" style="background-color: #092947">
            <div class="box-fasilitas py-3">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="judul-lokasi mb-3">
                            <h5>Lokasi dan Fasilitas Terdekat</h5>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-hospital"></i>
                                    <span class="ms-2" style="font-size: 10px;">Rs: Hermina, Mitra Keluarga, Brawijaya,
                                        Sari Asih, Puri Cinere.</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-cart"></i>
                                    <span class="ms-2" style="font-size: 10px;">Supermarket: Superindo, Tiptop,
                                        Indogrosir</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bag"></i>
                                    <span class="ms-2" style="font-size: 10px;">Mall: The Park Sawangan, Cinere
                                        Mall</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-backpack"></i>
                                    <span class="ms-2" style="font-size: 10px;">Sekolah: Universitas Terbuka, UnPam,
                                        UPN, Kharisma Bangsa, Harapan Bangsa, MumTaza, SMUN 8, SMPN 2 Dll</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bus-front"></i>
                                    <span class="ms-2" style="font-size: 10px;">Terminal Pondok Cabe</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-house-door"></i>
                                    <span class="ms-2" style="font-size: 10px;">Tempat ibadah: Mesjid, Gereja,
                                        Vihara</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-airplane"></i>
                                    <span class="ms-2" style="font-size: 10px;">Lapangan Terbang pondok cabe</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bicycle"></i>
                                    <span class="ms-2" style="font-size: 10px;">Sport: lapangan golf pondok cabe, lap
                                        Tenis, Gor Badminton.</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-egg-fried"></i>
                                    <span class="ms-2" style="font-size: 10px;">Restaurant: Mc'D, KFC, Solaria, Burger
                                        King dll</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-shop"></i>
                                    <span class="ms-2" style="font-size: 10px;">Pasar Tradisional: Ps Ciputat, Ps
                                        Parung, Ps.Pondok Labu</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="300" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=mutiara%20residence%20pondok%20cabe&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
    </section> --}}

    <section id="lokasi-fasilitas">
        <div class="container-fluid" style="background-color: #092947">
            <div class="box-fasilitas py-3">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="judul-lokasi mb-3">
                            <h5>Lokasi dan Fasilitas Terdekat</h5>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-hospital"></i>
                                    <span class="ms-2" style="font-size: 10px;">Rs: Hermina, Mitra Keluarga, Brawijaya,
                                        Sari Asih, Puri Cinere.</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-cart"></i>
                                    <span class="ms-2" style="font-size: 10px;">Supermarket: Superindo, Tiptop,
                                        Indogrosir</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bag"></i>
                                    <span class="ms-2" style="font-size: 10px;">Mall: The Park Sawangan, Cinere
                                        Mall</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-backpack"></i>
                                    <span class="ms-2" style="font-size: 10px;">Sekolah: Universitas Terbuka, UnPam,
                                        UPN, Kharisma Bangsa, Harapan Bangsa, MumTaza, SMUN 8, SMPN 2 Dll</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bus-front"></i>
                                    <span class="ms-2" style="font-size: 10px;">Terminal Pondok Cabe</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-house-door"></i>
                                    <span class="ms-2" style="font-size: 10px;">Tempat ibadah: Mesjid, Gereja,
                                        Vihara</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-airplane"></i>
                                    <span class="ms-2" style="font-size: 10px;">Lapangan Terbang pondok cabe</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bicycle"></i>
                                    <span class="ms-2" style="font-size: 10px;">Sport: lapangan golf pondok cabe, lap
                                        Tenis, Gor Badminton.</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-egg-fried"></i>
                                    <span class="ms-2" style="font-size: 10px;">Restaurant: Mc'D, KFC, Solaria, Burger
                                        King dll</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-shop"></i>
                                    <span class="ms-2" style="font-size: 10px;">Pasar Tradisional: Ps Ciputat, Ps
                                        Parung, Ps.Pondok Labu</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="300" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=mutiara%20residence%20pondok%20cabe&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section id="footer" style="color: white; background-color: #0f1925;">
        <div class="container">
            <div class="row">
                <!-- Logo and Description -->
                <div class="col-12 col-md-4 mt-4">
                    <img src="{{ asset('img/main-logo.png') }}" alt="Main Logo" class="mb-3 img-fluid">
                    <p>There is nothing more important than a good, safe, secure place to get back to.</p>
                </div>

                <!-- Contact Information -->
                <div class="col-12 col-md-4 mt-4">
                    <h3>Contact</h3>
                    <p><i class="fa-solid fa-phone mb-4 me-2"></i> (+62) 812 1333 4441</p>
                    <p><i class="fa-solid fa-envelope mb-4 me-2"></i> mutiara@property.com</p>
                    <p><i class="fa-solid fa-location-dot mb-4 me-2"></i>Jl. Panjang No.24 Cipedak, Kec. Jagakarsa, Kota
                        Jakarta Selatan</p>
                </div>

                <!-- Footer Image -->
                <div class="col-12 col-md-4 mt-4">
                    <img src="Assets/img/image-footer.svg" alt="Footer Image" class="img-fluid">
                </div>

                <!-- Copyright -->
                <div class="col-12 mt-3 mb-3">
                    <h5 class="text-center">Copyright ©2024 All rights reserved</h5>
                </div>
            </div>
        </div>
    </section>
@endsection
