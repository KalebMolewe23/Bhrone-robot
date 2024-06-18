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
    <div class="jumbotron m-5"
        style="background-color:white; border: 4px solid white; padding: 0.5rem; color:black; min-height: 80vh; min-height:90vh">
        <h1 class="my-4">Catatan Baru</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form id="note-form" action="{{ route('admin.notes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <div id="editor-container" style="height: 300px;">{!! old('body') !!}</div>
                <input type="hidden" id="body" name="body" value="{{ old('body') }}">
            </div>
            <div class="row mb-5">
                <div class="col-sm-6 mt-2">
                    <a class="btn btn-light btn-block" href="{{ route('admin.notes.index') }}">Back</a>
                </div>
                <div class="col-sm-6 mt-2">
                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                </div>
        </form>
    </div>
</div>
</div>
</section>

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var quill = new Quill('#editor-container', {
            theme: 'snow'
        });

        var form = document.getElementById('note-form');
        form.onsubmit = function () {
            var bodyInput = document.querySelector('input[name=body]');
            bodyInput.value = quill.root.innerHTML.trim(); // Trimming to avoid unnecessary spaces

            // Log the value to ensure it's set correctly
            console.log('Quill content:', bodyInput.value);
        };
    });

</script>
</body>
</html>