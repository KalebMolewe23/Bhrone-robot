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
                <h6>17-06-2024, <span style="font-size:15px;">Diterbitkan oleh admin</span></h6><br>
            </div>
            <center>
                <img style="width: 200px;margin-top:30px;" src="{{ asset('assets/image/icon.png') }}" alt="">
            </center>
            <p style="padding:50px;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Robot expert professor from Chukyo University Japan, Pitoyo Hartono, became a guest speaker for the Focus Group Discussion (FGD) activity with the theme Artificial Intelligence in Robotics and Computing Learning Technology at UB Guest House, Malang (Saturday, 26/8/2023).
                The presence of Prof. Pitoyo Hartono is a return visit that was made by UB Rector, Vice Rector for Planning, Cooperation and Internationalization and their staff to Chukyo University Nagoya-Japan in May 2023.<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The FGD was attended by 20 lecturers of Electrical Engineering FTUB, Physics UB FMIPA, Computer Science, and Japanese Literature FCS-UB. It was opened by the Vice Rector for Planning, Cooperation and Internationalization UB Andi Kurniawan, SPi., MEng., DSc.
                In his speech, Andi Kurniawan said that UB will develop an AI-based robot with the icon of Raja Brawijaya or BRONE (Brawijaya Number ONE) doll and this FGD is a baby step or the forerunner to the formation of the robot.<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“The Rector gave us a special task to look for comparative advantages potential in UB that can be globalized. It is hoped that UB globalizing project can be aligned and synergized with the direction of science and technology development in UB which has declared it as an AI Digital Campus, starting with developing robotics based on AI at the same time supports learning technology with the main goal of building network and specific comparative groups related to AI-based Robotics,” he said.<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All participants enthusiastically participated in the FGD from start to finish to listen to Prof. Pitoyo Hartono, a robotics expert from Indonesia who has lived in Japan for a long time. He said one of the robots he created was able to learn to live on its own by looking for energy through the solar cells installed on the robot. By using a solar cell robot, it can search for sunlight on its own to replenish energy so it stays alive and at night the robot ‘sleeps’.<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“I did a lot of mathematical theory and actually I am a theorist, not a robotist, but because my senses gave me the task of making an 18 m tall Gundam Robot, I tried to make it happen for 6 years,” he explained.
                Prof. Pitoyo Hartono is part of a team of Japanese scientists, he is involved in making Gundam Global Challenge Robot Japan which is on display in Yokohama-Japan until March 2024.
                The FGD material discussed was AI in robotics and learning technology, and Unifying the vision and mission of robotics and learning technology at Universitas Brawijaya.<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The FGD was moderated by Muhammad Aziz Muslim, S.T., M.T., Ph.D (Head of the Department of Electrical Engineering, Faculty of Engineering UB), he is an alumnus of Kyushu Institute of Technology-Japan in 2008, his dissertation topic was Smart Robot. Dr. Eng. Gembong Edhi Setyawan, S.T., M.T lecturer in Computer Engineering Faculty of Communication Sciences UB, alumni of Waseda University Japan in 2023 with the dissertation Cooperative Robot, which was promoted by Professor Hideyuki Sawada and co-promoter Professor Pitoyo Hartono.
            </p>
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