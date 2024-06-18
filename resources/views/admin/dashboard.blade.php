<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    
    <!-- bootstrap style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- boxicons style -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="#"><strong>BRONE</strong> <img src="{{ asset('assets/image/icon.png') }}" style="width:50px"></a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">BRONE</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/admin') }}"><strong>Home</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/posts') }}"><strong>Post</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/notes') }}"><strong>Catatan</strong></a>
                </li>
            </ul>
        </div>
        </div>
        <a href="{{ url('logout') }}" class="signup-button">Log Out</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    </nav>


    <section>
        <center>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card m-3 bg-transparent"
                        style="width: 18rem; border: 4px solid white; padding: 0.5rem; color:white;">
                        <div class="card-body">
                            <h1 class="card-text text-center">{{ $postCount }}</h1>
                            <h5 class="card-title text-center">Jumlah Post</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card m-3 bg-transparent"
                        style="width: 18rem; border: 4px solid white; padding: 0.5rem; color:white;">
                        <div class="card-body">
                            <h1 class="card-text text-center">{{ $noteCount }}</h1>
                            <h5 class="card-title text-center">Jumlah Catatan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card m-3 bg-transparent"
                        style="width: 18rem; border: 4px solid white; padding: 0.5rem; color:white;">
                        <div class="card-body">
                            <h1 class="card-text text-center">{{ $userCount }}</h1>
                            <h5 class="card-title text-center">Jumlah Admin</h5>
                        </div>
                    </div>
                </div>
            </div>
        </center>
        <div class="row mt-4">
            <div class="col-sm-8">
                <div class="jumbotron bg-transparent"
                    style=" border: 4px solid white; padding: 0.5rem; color:white; min-height: 80vh">
                    <h4>Catatan</h4>
                    @foreach ($notes as $note)
                    <a href="{{ route('admin.notes.edit', $note->id) }}" style="text-decoration:none">
                        <div class="card mb-3" style="color:black">
                            <div class="card-body">
                                <h5 class="card-title">{{ $note->title }}</h5>
                                <p class="card-text">{{ Str::limit(strip_tags($note->body), 150) }}</p>
                            </div>
                        </div>
                        </a>
                        @endforeach
                        <div class="pagination">
                            @if ($notes->previousPageUrl())
                            <a href="{{ $notes->previousPageUrl() }}" class="btn btn-primary">Previous</a>
                            @endif
                            @if ($notes->nextPageUrl())
                            <a href="{{ $notes->nextPageUrl() }}" class="btn btn-primary">Next</a>
                            @endif
                        </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="jumbotron bg-transparent"
                    style=" border: 4px solid white; padding: 0.5rem; color:white; min-height: 80vh">
                    <h5>Post Terbaru</h5>
                    @foreach($latestPosts as $post)
                    <div class="card mb-4">
                        @if($post->thumbnail)
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" class="card-img-top" alt="{{ $post->title }}">
                        @endif
                        <a href="{{ route('posts.show', $post->slug) }}" style="text-decoration:none; color:black;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}
                                </h5>
                                <p class="card-text">
                                    <strong>Author:</strong> {{ $post->user->name }}<br>
                                    <strong>Category:</strong> {{ $post->category->name }}<br>
                                    <strong>Status:</strong> {{ ucfirst($post->status) }}
                                </p>
                            </div>
                    </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</body>
</html>