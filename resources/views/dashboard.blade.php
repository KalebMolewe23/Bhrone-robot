<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - BRONE</title>
    <link rel="icon" href="{{ asset('assets/image/icon.png') }}" type="image/x-icon">

    <!-- css style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    
    <!-- bootstrap style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- boxicons style -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <!-- Loading website -->
    <div id="preloader">
        <div class="center">
            <div class="ring"></div>
            <span><img style="width: 150px;margin-top:30px" src="{{ asset('assets/image/icon.png') }}" alt=""></span>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="/"><strong>BRONE</strong> <img src="{{ asset('assets/image/icon.png') }}" style="width:50px"></a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">BRONE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang"><strong>Tentang</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#informasi"><strong>Informasi</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan"><strong>Layanan</strong></a>
                    </li>
                </ul>
            </div>
            </div>
            <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- header content -->
    <section id="home">
        <div class="container">
            <div class="slide">

                <?php
                    foreach($information as $v_inf){
                ?>
                    <div class="item" style="background-image: url('{{ asset('assets/image/header/'.$v_inf->image) }}'); background-size: cover;">
                        <div class="content">
                            <div class="name">{{ $v_inf->title }}</div>
                            <div class="des">{{ $v_inf->caption }}</div>
                            <button onclick="openModal({{ $v_inf->id }})">Lihat Selengkapnya <i class='bx bx-right-arrow-alt'></i></button>
                        </div>
                    </div>
                <?php
                    }
                ?>

            </div>

            <div class="button">
                <button class="prev"><i class='bx bx-left-arrow-alt'></i></button>
                <button class="next"><i class='bx bx-right-arrow-alt'></i></button>
            </div>
        </div>

    </section>

    @foreach($information as $v_inf)
        <div id="modal{{ $v_inf->id }}" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal({{ $v_inf->id }})">&times;</span>
                <h2>{{ $v_inf->title }}</h2><p style="color:orange">{{ $v_inf->caption }}</p><br>
                <p>{!! $v_inf->description !!}</p>
            </div>
        </div>
    @endforeach

    <!-- menu 2 --> 
    <section class="section-home" style="background-color:#222F3E">
        <center><h3 style="color:white;"><strong>Layanan Kami</strong></h3></center><br>
        <div class="row">
            <div class="col">
                <div class="icon" style="text-align:right;">
                    <i class='bx bx-home' style='font-size: 40px; color: white;'></i><br>
                    Home         
                </div>
            </div>
            <div class="col">
                <div class="icon" style="margin-left:50px">
                    <i class='bx bx-cog' style='font-size: 40px; color: white;'></i><br>
                        Tentang         
                </div>
            </div>
            <div class="col">
                <div class="icon" style="margin-right:50px">
                    <i class='bx bxs-info-circle' style='font-size: 40px; color: white;'></i><br>
                        Informasi         
                </div>
            </div>
            <div class="col">
                <div class="icon" style="text-align:left;">
                    <i class='bx bxs-user-voice' style='font-size: 40px; color: white;'></i></i><br>
                        Layanan         
                </div>
            </div>
        </div>
    </section>

    <section style="text-align: center;" id="tentang">
        <h4 class="text-center">Tentang <i class='bx bx-cog' style='font-size: 20px; color: black'></i></h4>
        <br>
        <div style="display: flex; justify-content: space-around;margin-bottom: 20px;" class="row">
            <div style="text-align: right;" class="col">
                <a href="{{ url('/history') }}" class="signup-button">Sejarah/Profil</a><br><br><br>
            </div>
            <div style="text-align: left;" class="col">
                <a href="{{ url('/visi') }}" class="login-button">Visi, Misi, dan Tujuan</a><br><br><br>
            </div>
        </div>
        <div class="row">
            <h4 class="text-center">Lagi Viral <i class='bx bxs-hot' style='font-size: 20px; color: red'></i></h4>
            <h7>Lihat Artikel <i class='bx bx-right-arrow-circle'></i></h7><br><br> 
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/image/artikel/artikel1.jpg') }}" class="card-img-top" alt="Gambar 1">
                        <div class="card-body">
                            <p>04 Juni 2024</p>
                            <h5>Belajar dari Kegagalan, Perusahaan Happy Asmara Gandeng UB Kembangkan Inovasi</h5>
                            <a href=""><p style="font-size:13px">Baca Selengkapnya</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/image/artikel/artikel2.jpg') }}" class="card-img-top" alt="Gambar 2">
                        <div class="card-body">
                            <p>04 Juni 2024</p>
                            <h5>Dianka Harissandy, Mahasiswi Ilmu Komunikasi UB Top 10 MMBI</h5>
                            <a href=""><p style="font-size:13px">Baca Selengkapnya</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/image/artikel/artikel3.jpeg') }}" class="card-img-top" alt="Gambar 3">
                        <div class="card-body">
                            <p>04 Juni 2024</p>
                            <h5>Sejak 5 Tahun Belajar Tilawah, Mahasiswi FT Juara 1 Tartilil MTQ UB</h5>
                            <a href=""><p style="font-size:13px">Baca Selengkapnya</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: url('{{ asset('assets/image/work.jpg') }}'); background-size: cover; background-position: center; min-height: 50vh; position: relative;">
        <div class="row" style="margin-top:-100px">
            <div class="col text-left" style="color:white;">
                <h5>BRONE</h5><br>
                <h4>
                    Maskot UB bernama BRONE, yang merupakan singkatan dari <span style="color:orange"><strong>"Brawijaya Number One"</strong></span>. BRONE memiliki konsep sebagai robot pendamping yang menjadi pemandu informasi. Dia mampu belajar dan terus berkembang.
                </h4><br><br>
                <p style="color:orange"><strong>"Building Up Noble Future"</strong></p>
            </div>
            <div class="col" style="text-align: center;">
                <img src="{{ asset('assets/image/icon.png') }}" class="moving-image" style="width:220px">
            </div>
        </div>
    </section>

    <section id="informasi">
    <h4>Informasi <i class='bx bxs-info-circle' style='font-size: 20px; color: black;'></i></h4>
    <center>
        <a href="#berita-content" class="button_informasi active" id="berita-button" onclick="showBerita()">Berita</a>
        <a href="#pengumuman-content" class="button_informasi" id="pengumuman-button" onclick="showPengumuman()">Pengumuman</a>
    </center><br>

    <div id="berita-content" class="content_informasi">        
        <!-- Konten Berita -->

        <?php foreach($post as $v_post) { ?>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 text-center">
                    <div class="circle">
                        <?php 
                            $timestamp = strtotime($v_post->created_at); 
                            $day = date('d', $timestamp);
                            $month = date('M', $timestamp);
                            $years = date('Y', $timestamp);
                        ?>
                        <p><strong>{{ $day }}</strong></p>
                        <p>{{ $month }}</p>
                        <p>{{ $years }}</p>
                    </div>
                </div>
                <div class="col-md-4 text-left">
                    <label class="login-button">Berita</label><br><br>
                    <h5>{{ $v_post->title }}</h5><br>
                    <a href="#"><h7>Baca Selengkapnya</h7></a>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset($v_post->thumbnail) }}" style="width:100px">
                </div>
            </div>
            <hr>
        <?php } ?>
        <br><br>
        <center>
            <a href=""><button class="btn btn-primary">Lihat Semua Artikel</button></a>
        </center>
    </div>

    <div id="pengumuman-content" class="content_informasi" style="display: none;">
        <!-- Konten Pengumuman -->
        <h2>Pengumuman</h2>
        <p>Ini adalah konten pengumuman...</p>
    </div>
</section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script>

        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            loader.style.display = "none";
        })

        function openModal(modalNumber) {
            var modal = document.getElementById('modal' + modalNumber);
            if (modal) {
                modal.style.display = 'block';
            }
        }

        function closeModal(modalNumber) {
            var modal = document.getElementById('modal' + modalNumber);
            if (modal) {
                modal.style.display = 'none';
            }
        }

        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = "none";
            }
        }

        function showBerita() {
            document.getElementById('berita-content').style.display = 'block';
            document.getElementById('pengumuman-content').style.display = 'none';

            document.getElementById('berita-button').classList.add('active');
            document.getElementById('pengumuman-button').classList.remove('active');
        }

        // Fungsi untuk menampilkan konten Pengumuman dan menyembunyikan Berita
        function showPengumuman() {
            document.getElementById('berita-content').style.display = 'none';
            document.getElementById('pengumuman-content').style.display = 'block';

            document.getElementById('berita-button').classList.remove('active');
            document.getElementById('pengumuman-button').classList.add('active');
        }

        // Mengatur kondisi awal berdasarkan hash dari URL
        window.onload = function() {
            var hash = window.location.hash.substr(1);
            if (hash === 'pengumuman') {
                showPengumuman();
            } else {
                showBerita(); // Default ke Berita jika hash tidak ada atau tidak valid
            }
        };
    </script>
</body>
</html>