<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('assets/image/icon.png') }}" type="image/x-icon">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <title>Task Admin - BRONE</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Memuat pustaka moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- boxicons style -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- datatables -->
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
        .form-control {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: var(--bs-body-color);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: var(--bs-body-bg);
            background-clip: padding-box;
            border: 0.5px solid gray;
            border-radius: 5px;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        .btn {
            --bs-btn-padding-x: 0.75rem;
            --bs-btn-padding-y: 0.375rem;
            --bs-btn-font-family: ;
            --bs-btn-font-size: 1rem;
            --bs-btn-font-weight: 400;
            --bs-btn-line-height: 1.5;
            --bs-btn-color: var(--bs-body-color);
            --bs-btn-bg: transparent;
            --bs-btn-border-width: var(--bs-border-width);
            --bs-btn-border-color: transparent;
            --bs-btn-border-radius: var(--bs-border-radius);
            --bs-btn-hover-border-color: transparent;
            --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
            --bs-btn-disabled-opacity: 0.65;
            --bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
            display: inline-block;
            padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
            font-family: var(--bs-btn-font-family);
            font-size: var(--bs-btn-font-size);
            font-weight: var(--bs-btn-font-weight);
            line-height: var(--bs-btn-line-height);
            color: var(--bs-btn-color);
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
            border-radius: 5px;
            background-color: var(--bs-btn-bg);
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        .btn-primary {
            --bs-btn-color: #fff;
            --bs-btn-bg: #0d6efd;
            --bs-btn-border-color: #0d6efd;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #0b5ed7;
            --bs-btn-hover-border-color: #0a58ca;
            --bs-btn-focus-shadow-rgb: 49, 132, 253;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #0a58ca;
            --bs-btn-active-border-color: #0a53be;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #0d6efd;
            --bs-btn-disabled-border-color: #0d6efd;
        }
        .btn-danger {
            --bs-btn-color: #fff;
            --bs-btn-bg: #dc3545;
            --bs-btn-border-color: #dc3545;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #bb2d3b;
            --bs-btn-hover-border-color: #b02a37;
            --bs-btn-focus-shadow-rgb: 225, 83, 97;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #b02a37;
            --bs-btn-active-border-color: #a52834;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #dc3545;
            --bs-btn-disabled-border-color: #dc3545;
        }
        #preloader{
            background: white;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index:9999;
        }

        .ring{
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            animation: ring 2s linear infinite;
        }

        .center{
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        @keyframes ring{
            0%{
                transform: rotate(0deg);
                box-shadow: 1px 5px 2px #15baef;
            }
            50%{
                transform: rotate(180deg);
                box-shadow: 1px 5px 2px #000;
            }
            100%{
                transform: rotate(360deg);
                box-shadow: 1px 5px 2px #00183a;
            }
        }

        .ring:before{
            position: absolute;
            content: '';
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            border-radius: 50%;
            box-shadow: 0 0 5px #15baef;
        }
    </style>
</head>
<body>

    <!-- Loading website -->
    <div id="preloader">
        <div class="center">
            <div class="ring"></div>
            <span><img style="width: 150px;margin-top:30px" src="{{ asset('assets/image/icon.png') }}" alt=""></span>
        </div>
    </div>

    <!-- SIDEBAR -->
	<section id="sidebar">
		<a style="margin-left:30px;" href="{{ url('/admin') }}" class="brand">
            <img src="{{ asset('assets/image/icon.png') }}" style="width:30px">
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="{{ url('/admin') }}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="{{ url('/admin/notes') }}">
                    <i class='bx bxs-notepad'></i>
					<span class="text">New Task</span>
				</a>
			</li>
			<li>
				<a href="{{ url('/admin/posts') }}">
                    <i class='bx bxs-news'></i>
					<span class="text">News & Announcements</span>
				</a>
			</li>
			<li>
				<a href="{{ url('/admin/articles') }}">
                    <i class='bx bx-news' ></i>
					<span class="text">Article</span>
				</a>
			</li>
			<li>
				<a href="{{ url('/admin/teams') }}">
					<i class='bx bxs-group' ></i>
					<span class="text">Teams</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="{{ url('/admin/cms') }}">
					<i class='bx bxs-cog' ></i>
					<span class="text">CMS</span>
				</a>
			</li>
			<li>
				<a href="{{ url('logout') }}" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

    <!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
            <i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="profile">
				<img src="{{ asset('assets/admin/img/people.png') }}">
			</a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Task</h1>
					<ul class="breadcrumb">
						<li>
							<a href="{{ url('/admin') }}">Admin</a>
						</li>
                        <li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a href="{{ url('/admin/notes') }}">Task</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="{{ url('/admin/notes') }}">Create</a>
						</li>
					</ul>
				</div>
			</div>

            <div class="table-data" data-aos="fade-up">
                <div class="order">
                    <form id="note-form" action="{{ route('admin.notes.store') }}" method="POST">
                        @csrf
                        <h4>Title</h4>
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        </div><br>
                        <h4>Content</h4>
                        <div class="form-group">
                            <textarea class="form-control" id="body" name="body">{{ old('body') }}</textarea>
                        </div><br>
                        <div class="row mb-5">
                            <div class="col-sm-6 mt-2">
                            </div>
                            <div style="text-align:right">
                                <a class="btn btn-light btn-block" href="{{ route('admin.notes.index') }}">Back</a>
                                <button type="submit" class="btn btn-primary btn-block">Create</button>
                            </div>
                    </form>
                </div>
            </div>

        </main>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
	<script src="{{ asset('assets/admin/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <script>

        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            loader.style.display = "none";
        })

        AOS.init({
            duration: 1500
        });

        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );

    
    </script>
</body>
</html>