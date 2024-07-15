<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Settings</title>
    <link rel="icon" href="{{ asset('assets/image/icon.png') }}" type="image/x-icon">

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
                    <a class="nav-link" aria-current="page" href="{{ url('/admin') }}"><strong>Home</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/posts') }}"><strong>Post</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/notes') }}"><strong>Catatan</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/admin/cms') }}"><strong>CMS</strong></a>
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

    <div class="section2">
        <br><br><br><br><br>
        
        <h2>CMS Settings</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($headerImages as $header)
                        <!-- Form untuk menyimpan perubahan -->
                        <form id="form-{{ $header->id }}" action="{{ route('header.update', $header->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <tr>
                                    <td>{{ $header->id }}</td>
                                    <td style="width:200px;">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="title" name="title" value="{{ $header->title }}">
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('assets/image/header/' . $header->image) }}" alt="{{ $header->image }}" style="max-width: 200px;">
                                        <br>
                                        <input type="file" name="image" accept="image/*">
                                    </td>
                                    <td>
                                        <!-- Tampilkan deskripsi menggunakan Quill.js -->
                                        <div id="editor-{{ $header->id }}" style="height: 150px;">
                                            {!! $header->description !!}
                                        </div>
                                    </td>
                                    <td>
                                        <input type="hidden" name="id" value="{{ $header->id }}">
                                        <input type="hidden" id="description-{{ $header->id }}" name="description">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </td>
                                </tr>
                            </form>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    // Inisialisasi Quill.js untuk setiap editor
    @foreach ($headerImages as $header)
        var quill_{{ $header->id }} = new Quill('#editor-{{ $header->id }}', {
            theme: 'snow'  // Anda bisa menyesuaikan tema sesuai preferensi
        });

        // Tangkap isi editor saat tombol Save ditekan
        document.querySelector('form[action="{{ route('header.update', $header->id) }}"]').onsubmit = function() {
            var html = quill_{{ $header->id }}.root.innerHTML;
            document.getElementById('description-{{ $header->id }}').value = html;
        };
    @endforeach
</script>

</body>
</html>