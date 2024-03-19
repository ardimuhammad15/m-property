@extends('laymas')
@section('content')

    <section id="utama">
      <div class="hero container-fluid" style="background-image: url('img/banner.png')">
            <div class="info-banner">
              <div class="color-overlay-banner">
                  <div class="container-banner">
                    <div class="centered-text-box">
                      <p class="mb-3" style="text-align: center"><b> Kenyamanan dan Kualitas Hidup yang Dijamin </b></p>
                      <span class="text-banner">Fasilitas modern termasuk taman bermain anak dan keamanan 24 jam. 
                        Hubungi kami untuk informasi lebih lanjut dan jadwal kunjungan ke lokasi. 
                        Segera wujudkan hunian impian Anda bersama Mutiara Residence!</span>
                        <div class="mt-3 d-flex justify-content-center">
                          <a href="">
                            <button type="button" class="btn btn-outline-warning">Info Lebih Lanjut</button>
                          </a>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <section id="fasilitas">
      <div class="container-fasilitas container-fluid"  style="background-image: url('./Assets/img/home-content.svg');">
          <div class="color-overlay-fasilitas container-fluid">
            <div class="row">
              <div class="fasilitas-text p-3 d-flex justify-content-center align-items-center">
              <h2><b>FASILITAS</b></h2> 
              </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
              <div class="col-2 d-flex justify-content-center align-items-center">
                <div class="fasilitas-item">
                  <img class="img-fasilitas" src="/img/call.png" alt="">
                  <br>
                  <h5>Telepon</h5>
                </div>
              </div>
              <div class="col-2 d-flex justify-content-center align-items-center">
                <div class="fasilitas-item">
                  <img class="img-fasilitas" src="/img/bed.png" alt="">
                  <br>
                  <h5>Kamar</h5> 
                </div>
              </div>
              <div class="col-2 d-flex justify-content-center align-items-center">
                <div class="fasilitas-item">
                  <img class="img-fasilitas" src="/img/cctv.png" alt="">
                  <br>
                  <h5>CCTV</h5> 
                </div>
              </div>
              <div class="col-2 d-flex justify-content-center align-items-center">
                <div class="fasilitas-item">
                  <img class="img-fasilitas" src="/img/taman.png" alt="">
                  <br>
                  <h5>Taman Anak</h5> 
                </div>
              </div>
              <div class="col-2 d-flex justify-content-center align-items-center">
                <div class="fasilitas-item">
                  <img class="img-fasilitas" src="/img/security.png" alt="">
                  <br>
                  <h5>Keamanan 24 Jam</h5> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="type-rumah">
      <div class="container-fluid" style="background-color: #c2c9c3">
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
        <div class="row p-2 mb-2">
          <div class="col-5">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="/img/home-1.jpg" class="img-carousel d-block" width="440" height="200" alt="">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="/img/home-1a.jpeg" class="img-carousel d-block" width="440" height="200" alt="">
                </div>
                <div class="carousel-item">
                  <img src="/img/home-1.jpg" class="img-carousel d-block" width="440" height="200" alt="">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-6">
            <div class="deskripsi-type d-flex justify-content-center align-items-center">
              <div class="container-type">
                <div class="centered-text-box-type">
                  <p class="mb-3"><b> TYPE 1 LANTAI </b></p>
                  <span class="">Luas Bangunan (48 m2)</span> <br>
                  <span>Luas Tanah (84 m2)</span> <br>
                  <span>Harga Mulai dari <b>1 M</b></span>
                  <div class="mt-2">
                    <button type="button" class="btn btn-success" style="background-color: #22cf39">Whatsapp</button>
                    <button type="button" class="btn btn-outline-primary">Info Lebih Lanjut</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row p-2">
          <div class="col-5">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="/img/home-1.jpg" class="img-carousel d-block" width="440" height="200" alt="">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="/img/home-1a.jpeg" class="img-carousel d-block" width="440" height="200" alt="">
                </div>
                <div class="carousel-item">
                  <img src="/img/home-1.jpg" class="img-carousel d-block" width="440" height="200" alt="">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-6">
            <div class="deskripsi-type d-flex justify-content-center align-items-center">
              <div class="container-type">
                <div class="centered-text-box-type">
                  <p class="mb-3"><b> TYPE 1 LANTAI </b></p>
                  <span class="">Luas Bangunan (48 m2)</span> <br>
                  <span>Luas Tanah (84 m2)</span> <br>
                  <span>Harga Mulai dari <b>1 M</b></span>
                  <div class="mt-2">
                    <button type="button" class="btn btn-success" style="background-color: #22cf39">Whatsapp</button>
                    <button type="button" class="btn btn-outline-primary">Info Lebih Lanjut</button>
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
                    <p class="mb-3" style="color: #8C8B8B">Kami selalu siap membantu dengan memberikan layanan terbaik untuk Anda.</p>
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

    <section id="lantai">
      <div class="container-fluid">
            <div class="row align-items-start">
              <div class="col d-flex justify-content-center" style="background-color: #2173C0">
                <h3>Lantai 1</h3>
                <hr>
              </div>
              <div class="col d-flex justify-content-center" style="background-color: #0F3B65">
                <h3>Lantai 2</h3>
                <hr>
              </div>
            </div>
            <div class="row align-items-start">
              <div class="col p-2" style="background-color: #2173C0">
                <img src="{{ asset('img/lantai-1.png') }}" class="d-block w-100" alt="">
              </div>
              <div class="col p-2" style="background-color: #0F3B65">
                <img src="{{ asset('img/lantai-2.png') }}" class="d-block w-100" height="110" alt="">
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
            <div class="card">  
              <img src="{{ asset('img/artikel-1.png') }}" class="card-img-top" alt="">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <button id="card-judul" type="button" class="btn btn-outline-primary" disabled>Mutiara Artikel</button>
                  <p>09 Maret 2024</p>
                </div>
                <div>
                  <p style="color: #2173C0">Perumahan Elite Terjangkau Jakarta, Mutiara Residance!</p>
                </div>
                <div>
                  <a href="">
                    <i class="fa-solid fa-arrow-right" style="font-size: 7px">  Selanjutnya</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
            <div class="row">
              <div class="card">
                <img src="{{ asset('img/artikel-2.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <button id="card-judul" type="button" class="btn btn-outline-primary" disabled>Mutiara Artikel</button>
                      <p>09 Maret 2024</p>
                    </div>
                    <div>
                      <p style="color: #2173C0">Masih Ragu? Ini Keuntungan Memiliki Rumah Cluster</p>
                    </div>
                    <div>
                      <a href="">
                        <i class="fa-solid fa-arrow-right" style="font-size: 7px">  Selanjutnya</i>
                      </a>
                    </div>
                </div>
              </div>
            </div>
          <div class="row">
            <div class="card">
              <img src="{{ asset('img/artikel-3.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <button id="card-judul" type="button" class="btn btn-outline-primary" disabled>Mutiara Artikel</button>
                    <p>09 Maret 2024</p>
                  </div>
                  <div>
                    <p style="color: #2173C0">Inspirasi Warna Cat Rumah yang Cantik nan Populer
                      8</p>
                  </div>
                  <div>
                    <a href="">
                      <i class="fa-solid fa-arrow-right" style="font-size: 7px">  Selanjutnya</i>
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
        <img src="{{ asset('img/youtube.png') }}" class="w-100" alt="">
      </div>
    </section>

    <section id="pilihan">
      <div class="container-fluid" style="background-color: #092947">
        <div class="p-3">
          <h4 style="color: #FFA500">Pilihan Terbaik</h4>
          <h5 style="color: white">Residence Populer</h5>
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
                  <div>
                    <p style="color: #8C8B8B">Jl. Aselih No.85, Cipedak, Kec. Jagakarsa, 
                      Kota Jakarta Selatan</p>
                  </div>
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
                  <div>
                    <p style="color: #8C8B8B">Jl. Aselih No.111, Cipedak, Kec. Jagakarsa, 
                      Kota Jakarta Selatan,</p>
                  </div>
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
                  <div>
                    <p style="color: #8C8B8B">Jl. Panjang No.24 Cipedak, Kec. Jagakarsa,
                      Kota Jakarta Selatan</p>
                  </div>
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
                    <div>
                      <p style="color: #8C8B8B">Jl. Rw. Kopi, Pangkalan Jati, Cinere, Depok City, 
                        West Java</p>
                    </div>
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
                  <div>
                    <p style="color: #8C8B8B">Jl. Kunir No.48A, Pd. Cabe Udik, Kec. Pamulang, 
                      Kota Tangerang Selatan</p>
                  </div>
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
                    <span style="font-size: 8px">Rs : Hermina, Mitra Keluarga, Brawijaya, Sari Asih, Puri Cinere.
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
                    <span style="font-size: 8px">Sport: lapangan golf pondok cabe, lap Tenis, Gor Badminton.
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