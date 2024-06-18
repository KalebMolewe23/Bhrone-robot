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
<div class="jumbotron m-5" style=" border: 4px solid white; padding: 0.5rem; color:white; min-height: 80vh; min-height:90vh; color:black">
    <h1 class="my-4">Edit {{ $post->title }}</h1>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="thumbnail">Current Thumbnail:</label><br>
                    @if($post->thumbnail)
                        <img src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}" class="img-thumbnail">
                    @else
                        <img src="https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg" alt="Default Thumbnail" class="img-thumbnail">
                    @endif
                </div>
                <div class="form-group">
                    <label for="thumbnail">Thumbnail Baru</label>
                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
                </div>
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <div id="editor-container" style="height: 300px;">{!! old('body', $post->body) !!}</div>
                    <input type="hidden" id="body" name="body" value="{{ old('body', $post->body) }}">
                </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="id_category">Kategori</label>
                <select class="form-control" id="id_category" name="id_category">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $post->id_category ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-sm-6 mt-2">
            <a class="btn btn-light btn-block" href="{{ route('admin.posts.index') }}" id="back-button">Kembali</a>
        </div>
        <div class="col-sm-6 mt-2">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </div>
        </form>
    </div>
</div>
</div>
</section>

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow'
    });

    var form = document.querySelector('form');
    form.onsubmit = function () {
        var bodyInput = document.querySelector('input[name=body]');
        bodyInput.value = quill.root.innerHTML;
    };

    document.getElementById('back-button').onclick = function(event) {
        event.preventDefault();
        var confirmation = confirm("Apakah Anda yakin ingin kembali? Perubahan yang belum disimpan akan hilang.");
        if (confirmation) {
            window.location.href = this.href;
        }
    };
</script>
</body>
</html>