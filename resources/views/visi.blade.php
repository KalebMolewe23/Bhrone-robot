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

    <section>
        <div class="container_history"><br>
            <div align="left">
                <h3 style='color:orange'>VISI, MISI, DAN TUJUAN</h3>
                <h6>17-06-2024, <span style="font-size:15px;">Diterbitkan oleh admin</span></h6>
            </div>
            <center>
                <img style="width: 200px;margin-top:30px;" src="{{ asset('assets/image/icon.png') }}" alt="">
            </center><br>
            <div align="left">
                <h5><strong>Visi</strong></h5>
                <p style="padding:50px;">
                    “UB mempunyai visi menjadi perguruan tinggi pelopor dan pembaharu dengan reputasi internasional dalam ilmu pengetahuan dan teknologi, terutama yang menunjangindustri berbasis budaya untuk kesejahteraan masyarakat.”
                </p>
            </div>
            <div align="left">
                <h5><strong>Misi</strong></h5>
                <p style="padding:50px;">
                    1. Menyelenggarakan pendidikan berstandar internasional yang menghasilkan lulusan yang beriman dan bertakwa kepada Tuhan Yang Maha Esa, serta memiliki moral dan akhlak yang luhur, mandiri, serta profesional, dan berjiwa kewirausahaan.<br>
                    2. Menyelenggarakan penelitian untuk menghasilkan ilmu pengetahuan dan teknologi yang bermanfaat bagi masyarakat.<br>
                    3. Menyelenggarakan pengabdian kepada masyarakat untuk meningkatkan peran perguruan tinggi sebagai agen pembaruan, pelopor dan penyebar ilmu pengetahuan dan teknologi, serta sebagai agen pembangunan ekonomi bangsa dengan berdasar pada nilai kearifan lokal yang luhur.
                    4. Menyelenggarakan pendidikan tinggi dan mengelola perguruan tinggi yang unggul, berkeadilan, dan berkelanjutan.
                </p>
            </div>
            <div align="left">
                <h5><strong>Tujuan</strong></h5>
                <p style="padding:50px;">
                    1. Menghasilkan lulusan yang berkemampuan akademik, ‘berjiwa kewirausahaan, profesional, mandiri, beretos kerja, disiplin, berakhlak luhur, berwawasan teknologi mutakhir sehingga mampu bersaing dan unggul di tingkat nasional dan internasional<br>
                    2. Menghasilkan karya inovasi teknologi, seni, sosial, dan budaya yang mampu berperan dalam pembangunan ekonomi bangsa, membangun kemandirian, berdasar nilai luhur budaya serta unggul di tingkat nasional maupun internasional<br>
                    3. Mewujudkan lingkungan pendidikan tinggi yang ramah, berdaya saing unggul, dan berteknologi tinggi sehingga mampu mengembangkan potensi setiap insan Sivitas Akademika
                    4. Mewujudkan tata kelola perguruan tinggi yang akuntabel, tepat guna, efisien, mutakhir, dan terintegrasi sehingga mampu bersaing di tingkat nasional dan internasional
                </p>
            </div>
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

    </script>
</body>

</html>