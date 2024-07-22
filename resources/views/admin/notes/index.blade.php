<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
					<span class="text">Task</span>
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
			<form id="searchForm" method="GET">
				<div class="form-input">
					<input type="search" name="query" id="searchInput" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
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
							<a class="active" href="{{ url('/admin/notes') }}">Task</a>
						</li>
					</ul>
				</div>
			</div>

            <div class="table-data" data-aos="fade-up">
                <div class="order">
                    <div class="head">
                        <h3>Task All Information</h3>
                        <a href="{{ route('admin.notes.create') }}" class="btn btn-primary mb-3">+ Add Task</a>
                    </div>
                    <table id="article-table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </main>


    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
	<script src="{{ asset('assets/admin/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            loader.style.display = "none";
        })

        AOS.init({
            duration: 1500
        });

        $(document).ready(function() {
            $('#article-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('article.data') }}",
                columns: [
                    { data: 'title', name: 'title' },
                    { 
                        data: 'created_at', 
                        name: 'created_at',
                        render: function(data) {
                            return moment(data).format('DD-MM-YYYY HH:mm:ss');
                        }
                    },
                    { 
                        data: 'id',
                        render: function(data) {
                            return '<a href="/admin/notes/' + data + '/edit" class="btn btn-primary btn-sm"><i class="bx bxs-edit"></i> Edit</a> ' +
                           '<button class="btn btn-danger btn-sm" onclick="deletePost(' + data + ')"><i class="bx bxs-message-square-x"></i> Delete</button>';
                        }
                    }
                ]
            });
        });

        function editPost(id) {
            window.location.href = '/edit/' + id;
        }

        function deletePost(id) {
            // Tampilkan Sweet Alert
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to delete this data?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan penghapusan menggunakan AJAX
                    $.ajax({
                        url: '/admin/notes/' + id,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#article-table').DataTable().ajax.reload();
                        },
                        error: function(xhr) {
                            console.error('Error deleting post:', xhr.responseText);
                        }
                    });
                }
            });
        }

    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var query = document.getElementById('searchInput').value.trim();
        if (query.length > 0) {
            var url = query.startsWith('posts') ? '/admin/search/posts?query=' + encodeURIComponent(query) : '/admin/search/articles?query=' + encodeURIComponent(query);
            window.location.href = url;
        }
    });


    </script>

</body>
</html>