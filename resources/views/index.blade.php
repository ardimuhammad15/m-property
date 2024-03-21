@extends('laymas')
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
        #utama {
            height: 100vh;
            /* Full viewport height */
            background-image: url('img/desktoplanding.jpg');
            background-size: 1440;
            /* Ensures the image fits within the container, might introduce blank spaces */
            background-position: center center;
            /* Centers the image */
            background-repeat: no-repeat;
            /* Prevents the image from repeating */
        }

        /* Adjustments specifically for larger screens (desktops) */
        @media (min-width: 769px) {
            #utama {
                padding-top: 65px;
                /* Space for the navbar, adjust based on actual navbar height */
                height: calc(100vh - 65px);
                /* Adjust the height taking the navbar into account */
                /* Pull the section back up to align with the top of the viewport */
            }
        }

        /* Responsive styles for mobile devices */
        @media (max-width: 768px) {
            #utama {
                background-image: url('img/mobilelanding.jpg');
                background-size: contain;
                /* Adjust if the image is getting cropped */
                background-position: center top;
                background-repeat: no-repeat;
                padding-top: 65px;
                /* Adjust based on the mobile navbar's height */
                height: calc(100vh - 65px);
                /* Adjust based on the mobile navbar's height */
                /* Adjust if necessary */
            }
        }
    </style>
    </style>
    <section id="utama">
    </section>

    <section id="fasilitas">
        <div class="container-fasilitas container-fluid" style="background-image: url('./img/img-fasilitas.png');">
            <div class="color-overlay-fasilitas container-fluid">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="fasilitas-item">
                            <img src="{{ asset('img/fasilitas-text.png') }}" class="img-fluid w-100" alt="">
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

    <section id="type-rumah">
        <div class="container-fluid" style="background-color: #092947">
            <div class="row mb-2">
                <div class="judul-type-rumah col-8 p-2">
                    <div class="row">
                        <h2>MUTIARA RESIDENCE</h2>
                    </div>
                    <div class="row">
                        <p>Jalan Kunir Raya No. 48A Kel. Pondok Cabe Udik, Kec. Pamulang, Tangerang Selatan</p>
                    </div>
                </div>
            </div>
            <div class="box-card p-3">
                <div class="row">
                    <div class="col-lg-5 d-flex justify-content-lg-center align-items-lg-center">
                        <div class="card" style="width: 20rem;">
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
                    <div class="col-lg-2 d-flex justify-content-lg-center align-items-lg-center">
                        <img src="{{ asset('img/harga1m.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-lg-center align-items-lg-center">
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
    </section>

    <section id="keunggulan">
        <div class="keunggulan">
            <div class="color-overlay-keunggulan d-flex">
                <div class="img-keunggulan col-6 d-flex justify-content-center align-items-center">
                    <img src="img/img-keunggulan.png" width="350" height="400" alt="">
                </div>
                <div class="deskripsi-keunggulan col-6 d-flex justify-content-center align-items-center">
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
    </section>

    <section id="artikel">
        <div class="container-fluid" style="background-color: #092947">
            <div class="p-3 ms-3">
                <h4 style="color: white">Artikel</h4>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="card" style="background: #092947">
                        <img src="{{ asset('img/artikel-1.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <div class="text-card d-flex justify-content-between">
                                <button id="card-judul" type="button" class="btn btn-outline-primary" disabled>Mutiara
                                    Artikel</button>
                                <p>09 Maret 2024</p>
                            </div>
                            <div>
                                <p style="color: #2173C0">Perumahan Elite Terjangkau Jakarta, Mutiara Residance!</p>
                            </div>
                            <div>
                                <a href="">
                                    <i class="fa-solid fa-arrow-right" style="font-size: 7px"> Selanjutnya</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card" style="background: #092947">
                        <img src="{{ asset('img/artikel-2.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <div class="text-card d-flex justify-content-between">
                                <button id="card-judul" type="button" class="btn btn-outline-primary" disabled>Mutiara
                                    Artikel</button>
                                <p>09 Maret 2024</p>
                            </div>
                            <div>
                                <p style="color: #2173C0">Masih Ragu? Ini Keuntungan Memiliki Rumah Cluster</p>
                            </div>
                            <div>
                                <a href="">
                                    <i class="fa-solid fa-arrow-right" style="font-size: 7px"> Selanjutnya</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card" style="background: #092947">
                        <img src="{{ asset('img/artikel-3.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text-card d-flex justify-content-between">
                                <button id="card-judul" type="button" class="btn btn-outline-primary" disabled>Mutiara
                                    Artikel</button>
                                <p>09 Maret 2024</p>
                            </div>
                            <div>
                                <p style="color: #2173C0">Inspirasi Warna Cat Rumah yang Cantik nan Populer
                                    8</p>
                            </div>
                            <div>
                                <a href="">
                                    <i class="fa-solid fa-arrow-right" style="font-size: 7px"> Selanjutnya</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center p-3">
                <button type="button" class="btn btn-primary">Lihat Semua</button>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container-fluid p-2" style="background-color: #092947">
            <img src="{{ asset('img/yt.png') }}" class="w-100" alt="">
        </div>
    </section>

    <section id="pilihan">
        <div class="container-fluid" style="background-color: #EAEAEA">
            <div class="p-3">
                <h4 style="color: #FFA500">Pilihan Terbaik</h4>
                <h5 style="color: #092947">Residence Populer</h5>
            </div>
            <div>
                <div class="d-flex justify-content-center">
                    <div class="row">
                        <div class="card">
                            <img src="{{ asset('img/pilihan-1.png') }}" class="card-img-pilihan" alt="">
                            <div class="card-body">
                                <div class="judul-pilihan">
                                    <p style="font-size: 15px"><b>Matoa 1</b></p>
                                </div>
                                <p style="color: black">Jl. Aselih No.85, Cipedak, Kec. Jagakarsa,
                                    Kota Jakarta Selatan</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <img src="{{ asset('img/pilihan-2.png') }}" class="card-img-pilihan" alt="">
                            <div class="card-body">
                                <div class="judul-pilihan">
                                    <p style="font-size: 15px"><b>Matoa 2</b></p>
                                </div>
                                <p style="color: black">Jl. Aselih No.111, Cipedak, Kec. Jagakarsa,
                                    Kota Jakarta Selatan,</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <img src="{{ asset('img/pilihan-3.png') }}" class="card-img-pilihan" alt="">
                            <div class="card-body">
                                <div class="judul-pilihan">
                                    <p style="font-size: 15px"><b>Jagakarsa</b></p>
                                </div>
                                <p style="color: black">Jl. Panjang No.24 Cipedak, Kec. Jagakarsa,
                                    Kota Jakarta Selatan</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <img src="{{ asset('img/pilihan-4.png') }}" class="card-img-pilihan" alt="">
                            <div class="card-body">
                                <div class="judul-pilihan">
                                    <p style="font-size: 15px"><b>Rawa Kopi</b></p>
                                </div>
                                <p style="color: black">Jl. Rw. Kopi, Pangkalan Jati, Cinere, Depok City,
                                    West Java</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <img src="{{ asset('img/pilihan-5.png') }}" class="card-img-pilihan" alt="">
                            <div class="card-body">
                                <div class="judul-pilihan">
                                    <p style="font-size: 15px"><b>Pondok Cabe</b></p>
                                </div>
                                <p style="color: black">Jl. Kunir No.48A, Pd. Cabe Udik, Kec. Pamulang,
                                    Kota Tangerang Selatan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lokasi-fasilitas">
        <div class="container-fluid" style="background-color: #092947">
            <div class="box-fasilitas">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-6">
                        <div class="judul-lokasi">
                            <h6>Lokasi dan Fasilitas Terdekat</h6>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <i><img src="{{ asset('img/fasilitas.png') }}" alt=""></i>
                                    <span style="font-size: 8px">Rs : Hermina, Mitra Keluarga, Brawijaya, Sari Asih, Puri
                                        Cinere.
                                    </span>
                                </div>
                                <div>
                                    <i><img src="{{ asset('img/fasilitas.png') }}" alt=""></i>
                                    <span style="font-size: 8px">Supermaket: Superindo, Tiptop, Indogrosir
                                    </span>
                                </div>
                                <div>
                                    <i><img src="{{ asset('img/fasilitas.png') }}" alt=""></i>
                                    <span style="font-size: 8px">⁠Mall: The Park Sawangan, Cinere Mall
                                    </span>
                                </div>
                                <div>
                                    <i><img src="{{ asset('img/fasilitas.png') }}" alt=""></i>
                                    <span style="font-size: 8px">Sekolah: Universitas Terbuka, UnPam, UPN,
                                        Kharisma Bangsa, Harapan Bangsa, MumTaza, SMUN 8, SMPN 2 Dll
                                    </span>
                                </div>
                                <div>
                                    <i><img src="{{ asset('img/fasilitas.png') }}" alt=""></i>
                                    <span style="font-size: 8px">Terminal Pondok Cabe
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <i><img src="{{ asset('img/fasilitas.png') }}" alt=""></i>
                                    <span style="font-size: 8px">Tempat ibadah: Mesjid, Gereja, Vihara
                                </div>
                                <div>
                                    <i><img src="{{ asset('img/fasilitas.png') }}" alt=""></i>
                                    <span style="font-size: 8px">Lapangan Terbang pondok cabe
                                    </span>
                                </div>
                                <div>
                                    <i><img src="{{ asset('img/fasilitas.png') }}" alt=""></i>
                                    <span style="font-size: 8px">Sport: lapangan golf pondok cabe, lap Tenis, Gor
                                        Badminton.
                                    </span>
                                </div>
                                <div>
                                    <i><img src="{{ asset('img/fasilitas.png') }}" alt=""></i>
                                    <span style="font-size: 8px">Restauran :
                                        Mc'D, KFC, Solaria, Burger King dll
                                    </span>
                                </div>
                                <div>
                                    <i><img src="{{ asset('img/fasilitas.png') }}" alt=""></i>
                                    <span style="font-size: 8px">Pasar Tradisional: Ps Ciputat,
                                        Ps Parung, Ps.Pondok Labu
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('img/map.png') }}" width="400" height="400" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
