<!doctype html>
<html lang="en">

<?php
    $DataImage1 = $image1->image;
    $DataImage2 = $image2->image;
    $DataImage3 = $image3->image;
    $DataImage4 = $image4->image;
    $DataImage5 = $image5->image;
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/user/css/owl.theme.default.min.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/frontend/user/css/style.css') }}">

    <title>HOME - BRONE</title>
    <link rel="icon" href="{{ asset('assets/image/icon.png') }}" type="image/x-icon">

    <style>
         /* slide */
        .slide {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .slide1 {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url({{ asset('assets/image/header/'.$DataImage1) }});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .slide2 {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url({{ asset('assets/image/header/'.$DataImage2) }});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .slide3 {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url({{ asset('assets/image/header/'.$DataImage3) }});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .slide4 {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url({{ asset('assets/image/header/'.$DataImage4) }});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .slide5 {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url({{ asset('assets/image/header/'.$DataImage5) }});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .slide .display-3 {
            text-transform: uppercase;
            color: #fff;
        }

        .moving-image {
            /* position: absolute; */
            bottom: 0;
            animation: moveUpDown 5s infinite alternate;
        }

        @keyframes moveUpDown {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }

        .button_informasi {
            padding: 10px 20px;
            margin: 0 10px;
            text-decoration: none;
            color: black;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: inline-block;
        }
        .button_informasi.active {
            background-color: #ff4d29;
            color: white;
            border-color: #ff4d29;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p> <i class='bx bxs-envelope'></i> debra.holt@example.com</p>
                    <p> <i class='bx bxs-phone-call'></i> (219) 555-0114</p>
                </div>
                <div class="col-auto social-icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>BRONE</strong> <img src="{{ asset('assets/image/icon.png') }}" style="width:50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Contact</a>
            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-left text-white">
                        <h6 class="text-white text-uppercase"><?= $image1->caption; ?></h6>
                        <h3 class="display-3 my-4"><?= $image1->title; ?></h3>
                        <a href="#" class="btn btn-brand">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-left col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase"><?= $image2->caption; ?></h6>
                        <h3 class="display-3 my-4"><?= $image2->title; ?></h3>
                        <a href="#" class="btn btn-brand">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide3">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-left col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase"><?= $image3->caption; ?></h6>
                        <h3 class="display-3 my-4"><?= $image3->title; ?></h3>
                        <a href="#" class="btn btn-brand">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide4">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-left col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase"><?= $image4->caption; ?></h6>
                        <h3 class="display-3 my-4"><?= $image4->title; ?></h3>
                        <a href="#" class="btn btn-brand">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-left col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase"><?= $image5->caption; ?></h6>
                        <h3 class="display-3 my-4"><?= $image5->title; ?></h3>
                        <a href="#" class="btn btn-brand">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 py-5">
                    <div class="row">

                        <div class="col-12">
                            <div class="info-box">
                                <img src="{{ asset('assets/frontend/user/img/icon6.png') }}" alt="">
                                <div class="ms-4">
                                    <h5>Article About Brone</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="{{ asset('assets/frontend/user/img/icon4.png') }}" alt="">
                                <div class="ms-4">
                                    <h5>News About Brone</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="{{ asset('assets/frontend/user/img/icon5.png') }}" alt="">
                                <div class="ms-4">
                                    <h5>Announcement About Brone</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('assets/image/icon.png') }}" class="moving-image" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- MILESTONE -->
    <section id="milestone">
        <div class="container">
            <div class="row text-center justify-content-center gy-4">
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">90K+</h1>
                    <p class="mb-0">Total Article Brone</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">45M</h1>
                    <p class="mb-0">Total News Brone</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">190</h1>
                    <p class="mb-0">Total Announcement Brone</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">380K</h1>
                    <p class="mb-0">Total Team Brone</p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>About Brone</h6>
                        <h1>Vision, Mission, And Objectives</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="{{ asset('assets/frontend/user/img/icon3.png') }}" alt="">
                        <h5>Vision Brone</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="{{ asset('assets/frontend/user/img/icon2.png') }}" alt="">
                        <h5>Mission Brone</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="{{ asset('assets/frontend/user/img/icon5.png') }}" alt="">
                        <h5>Objectives Brone</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="article">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Article</h6>
                        <h1>Article Posts</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="{{ asset('assets/frontend/user/img/project5.jpg') }}" alt="">
                        <a href="#" class="tag">Article</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Web Design trends in 2022</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="{{ asset('assets/frontend/user/img/project4.jpg') }}" alt="">
                        <a href="#" class="tag">Article</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Web Design trends in 2022</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="{{ asset('assets/frontend/user/img/project2.jpg') }}" alt="">
                        <a href="#" class="tag">Article</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Web Design trends in 2022</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Work</h6>
                        <h1>Successful projects</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="projects-slider" class="owl-theme owl-carousel">
            <div class="project">
                <div class="overlay"></div>
                <img src="{{ asset('assets/frontend/user/img/project1.jpg') }}" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="{{ asset('assets/frontend/user/img/project2.jpg') }}" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="{{ asset('assets/frontend/user/img/project3.jpg') }}" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="{{ asset('assets/frontend/user/img/project4.jpg') }}" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="{{ asset('assets/frontend/user/img/project5.jpg') }}" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Team</h6>
                        <h1>Team Members</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="{{ asset('assets/frontend/user/img/team_1.jpg') }}" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Marvin McKinney</h5>
                        <p>Marketing Coordinator</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="{{ asset('assets/frontend/user/img/team_2.jpg') }}" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Kathryn Murphy</h5>
                        <p>Ethical Hacker</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="{{ asset('assets/frontend/user/img/team_3.jpg') }}" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Darrell Steward</h5>
                        <p>Software Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <h1 style="text-align:center;">News & Announcement</h1>
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6><a href="#berita-content" class="button_informasi active" id="berita-button" onclick="showBerita()">News</a>
                        <a href="#pengumuman-content" class="button_informasi" id="pengumuman-button" onclick="showPengumuman()">Announcement</a></h6>
                    </div>
                </div>
            </div>
            <div id="berita-content" class="content_informasi">
                <div class="row">
                    <div class="col-md-4">
                        <article class="blog-post">
                            <img src="{{ asset('assets/frontend/user/img/project5.jpg') }}" alt="">
                            <a href="#" class="tag">Web Design</a>
                            <div class="content">
                                <small>01 Dec, 2022</small>
                                <h5>Web Design trends in 2022</h5>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="blog-post">
                            <img src="{{ asset('assets/frontend/user/img/project4.jpg') }}" alt="">
                            <a href="#" class="tag">Programming</a>
                            <div class="content">
                                <small>01 Dec, 2022</small>
                                <h5>Web Design trends in 2022</h5>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="blog-post">
                            <img src="{{ asset('assets/frontend/user/img/project2.jpg') }}" alt="">
                            <a href="#" class="tag">Marketing</a>
                            <div class="content">
                                <small>01 Dec, 2022</small>
                                <h5>Web Design trends in 2022</h5>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div id="pengumuman-content" class="content_informasi" style="display: none;">
            <div class="row">
                    <div class="col-md-4">
                        <article class="blog-post">
                            <img src="{{ asset('assets/frontend/user/img/project5.jpg') }}" alt="">
                            <a href="#" class="tag">Web Design</a>
                            <div class="content">
                                <small>01 Dec, 2022</small>
                                <h5>Web Design trends in 2022</h5>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="blog-post">
                            <img src="{{ asset('assets/frontend/user/img/project4.jpg') }}" alt="">
                            <a href="#" class="tag">Programming</a>
                            <div class="content">
                                <small>01 Dec, 2022</small>
                                <h5>Web Design trends in 2022</h5>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="blog-post">
                            <img src="{{ asset('assets/frontend/user/img/project2.jpg') }}" alt="">
                            <a href="#" class="tag">Marketing</a>
                            <div class="content">
                                <small>01 Dec, 2022</small>
                                <h5>Web Design trends in 2022</h5>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">Prixima<span class="dot">.</span></h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright@2020. All rights Reserved</p>
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url({{ asset('assets/frontend/user/img/c2.jpg') }}); min-height:300px;">
                                <div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Get in touch</h1>
                                    <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">First name</label>
                                        <input type="text" class="form-control" placeholder="Jon" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" placeholder="Doe" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Johndoe@example.com" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea name="" placeholder="This is looking great and nice." class="form-control" id=""  rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('assets/frontend/user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/user/js/app.js') }}"></script>

    <script>
        function showBerita() {
            document.getElementById('berita-content').style.display = 'block';
            document.getElementById('pengumuman-content').style.display = 'none';

            document.getElementById('berita-button').classList.add('active');
            document.getElementById('pengumuman-button').classList.remove('active');
        }

        function showPengumuman() {
            document.getElementById('berita-content').style.display = 'none';
            document.getElementById('pengumuman-content').style.display = 'block';

            document.getElementById('berita-button').classList.remove('active');
            document.getElementById('pengumuman-button').classList.add('active');
        }

        window.onload = function() {
            var hash = window.location.hash.substr(1);
            if (hash === 'pengumuman') {
                showPengumuman();
            } else {
                showBerita();
            }
        };
    </script>
</body>