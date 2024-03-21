@extends('navbar')

@section('content')
    <style>
        body {
            background-color: #092947;
            /* Warna background halaman */
        }

        .portfolio-header {
            margin-top: 75px;
            /* Jarak dari navbar ke header */
            text-align: center;
        }

        .portfolio-header-img {
            width: 100%;
            max-height: 40vh;
            object-fit: cover;
            /* Menjaga aspek rasio */
            display: block;
        }

        @media (max-width: 768px) {
            .portfolio-header-img {
                max-height: 15vh;
                object-fit: cover;
                /* Ini akan memastikan gambar menutupi area yang ditentukan tanpa memotong gambar */
            }
        }

        .portfolio-section {
            display: none;
            margin-top: 50px;
            /* Jarak antara navigasi dan isi section */
            margin-bottom: 30px;
            color: #ffffff;
            /* Warna teks agar terlihat pada background gelap */
        }

        .portfolio-img {
            width: 100%;
            height: auto;
            object-fit: cover;
            display: block;
            border-radius: 15px;
            /* Menambahkan sudut melengkung pada gambar */
        }

        .img-box {
            display: flex;
            justify-content: center;
            /* Pusatkan gambar secara horizontal */
            align-items: center;
            /* Pusatkan gambar secara vertikal */
            padding: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            margin-bottom: 30px;
        }

        .img-box:hover {
            transform: scale(1.05);
        }

        .navigation-center {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 20px;
            /* Memberikan jarak dari navigasi ke isi section */
        }

        .custom-btn {
            background-color: transparent;
            color: #ffffff;
            /* Warna teks pada tombol agar kontras dengan background */
            border: 2px solid transparent;
            transition: all 0.3s ease-in-out;
        }

        .custom-btn:hover,
        .custom-btn.active {
            border-color: #F56700;
            color: #ffffff;
        }

        .active {
            display: block;
        }

        .promo-banner img {
            max-width: 90%;
            /* Menyesuaikan lebar maksimum untuk layar besar */
            height: auto;
            /* Menjaga aspek rasio gambar */
        }

        @media (max-width: 768px) {
            .promo-banner img {
                max-width: 80%;
                /* Mengurangi lebar gambar untuk layar kecil */
                margin: 0 auto;
                /* Sentralisasi gambar */
            }
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
        <!-- Navbar content here -->
    </nav>

    <div class="portfolio-header">
        <img src="{{ asset('img/Pondok Cabe/pondokcabe-1.png') }}" class="portfolio-header-img" id="header-image"
            alt="Header Image">
    </div>

    <div class="navigation-center">
        <button class="btn custom-btn mx-2"
            onclick="changeContent('pondok-cabe', '{{ asset('img/Pondok Cabe/pondokcabe-1.png') }}')">Pondok Cabe</button>
        <button class="btn custom-btn mx-2"
            onclick="changeContent('matoa1', '{{ asset('img/Matoa 1/matoa1-1.jpg') }}')">Matoa 1</button>
        <button class="btn custom-btn mx-2"
            onclick="changeContent('matoa2', '{{ asset('img/Matoa 2/matoa2-1.png') }}')">Matoa 2</button>
        <button class="btn custom-btn mx-2"
            onclick="changeContent('rawa-kopi', '{{ asset('img/Rawa Kopi/rawakopi-1.jpg') }}')">Rawa Kopi</button>
        <button class="btn custom-btn mx-2"
            onclick="changeContent('jagakarsa', '{{ asset('img/Jagakarsa/jagakarsa-1.jpg') }}')">Jagakarsa</button>
    </div>

    <div class="container">
        <div id="pondok-cabe" class="portfolio-section">
            <div class="row">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-md-4 col-sm-6">
                        <div class="img-box">
                            <img src="{{ asset('img/Pondok Cabe/pondokcabe-' . $i . '.png') }}" class="portfolio-img"
                                alt="Pondok Cabe Image {{ $i }}">
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <div id="matoa1" class="portfolio-section">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="img-box">
                        <img src="{{ asset('img/Matoa 1/matoa1-1.jpg') }}" class="portfolio-img" alt="Matoa 1 Image">
                    </div>
                </div>
            </div>
        </div>

        <div id="matoa2" class="portfolio-section">
            <div class="row">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="{{ asset('img/Matoa 2/matoa2-' . $i . '.png') }}" class="portfolio-img"
                                alt="Matoa 2 Image {{ $i }}">
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <div id="rawa-kopi" class="portfolio-section">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="img-box">
                        <img src="{{ asset('img/Rawa Kopi/rawakopi-1.jpg') }}" class="portfolio-img" alt="Rawa Kopi Image">
                    </div>
                </div>
            </div>
        </div>

        <div id="jagakarsa" class="portfolio-section">
            <div class="row">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-md-4 col-sm-6">
                        <div class="img-box">
                            <img src="{{ asset('img/Jagakarsa/jagakarsa-' . $i . '.jpg') }}" class="portfolio-img"
                                alt="Jagakarsa Image {{ $i }}">
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <div class="promo-banner" style="margin-top: 20px; margin-bottom: 20px; text-align: center;">
        <a href="https://wa.me/6285813076036?text=Halo%20saya%20tertarik%20dengan%20promo%20dari%20Mutiara%20Residence"
            target="_blank">
            <img src="{{ asset('img/promo.png') }}" alt="Promo Banner" class="img-fluid">
        </a>
    </div>


    <script>
        function changeContent(sectionId, headerImgPath) {
            // Sembunyikan semua section
            document.querySelectorAll('.portfolio-section').forEach(function(section) {
                section.style.display = 'none';
            });

            // Hapus kelas 'active' dari semua tombol
            document.querySelectorAll('.custom-btn').forEach(function(button) {
                button.classList.remove('active');
            });

            // Ganti sumber gambar header
            const headerImage = document.getElementById('header-image');
            headerImage.src = headerImgPath;

            // Tampilkan section yang dipilih
            const activeSection = document.getElementById(sectionId);
            if (activeSection) {
                activeSection.style.display = 'block';
            }

            // Tambahkan kelas 'active' ke tombol yang sesuai
            const activeButton = document.querySelector('.custom-btn[data-section="' + sectionId + '"]');
            if (activeButton) {
                activeButton.classList.add('active');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            changeContent('pondok-cabe', '{{ asset('img/Pondok Cabe/pondokcabe-1.png') }}');
        });
    </script>
@endsection
