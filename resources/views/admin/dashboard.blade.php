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

	<title>Dashboard Admin - BRONE</title>

    <style>
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
			<li class="active">
				<a href="{{ url('/admin') }}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
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
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="{{ url('/admin') }}">Admin</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="{{ url('/admin') }}">Dashboard</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li data-aos="fade-left">
                    <i class='bx bxs-news'></i>
					<span class="text">
						<h3>{{ $totalPosts }}</h3>
						<p>News & Announcements</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>{{ $totalTeams }}</h3>
						<p>Teams</p>
					</span>
				</li>
				<li data-aos="fade-right">
                    <i class='bx bx-news' ></i>
					<span class="text">
						<h3>{{ $totalArticles }}</h3>
						<p>Article</p>
					</span>
				</li>
			</ul>


			<div class="table-data" data-aos="fade-up">
				<div class="order">
					<div class="head">
						<h3>Recent News & Announcements</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Thumbnail</th>
								<th>Creation Date</th>
								<th>Category</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($posts as $v_posts)
							<tr>
								<td>
									<img src="{{ asset($v_posts->thumbnail) }}">
								</td>
								<td>{{ $v_posts->formatted_created_at }}</td>
								<td>
                                    <?php
                                        if($v_posts->id_category == 1){
                                    ?>
                                        <span class="status completed">
                                            News
                                        </span>
                                    <?php
                                        }else{
                                    ?>
                                        <span class="status pending">
                                            Announcements
                                        </span>
                                    <?php
                                        }
                                    ?>
                                    
                                </td>
							</tr>
                            @endforeach
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Task List</h3>
					</div>
					<ul class="todo-list">
                        @foreach($task as $v_task)
                            <li class="completed">
                                <p>{{ $v_task->title }}</p>
                            </li>
                        @endforeach
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
	<script src="{{ asset('assets/admin/script.js') }}"></script>

    <script>

        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            loader.style.display = "none";
        })

        AOS.init({
            duration: 1500
        });

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