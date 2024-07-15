<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Memuat pustaka moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- css style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    
    <!-- bootstrap style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- boxicons style -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- datatables -->
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
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
                    <a class="nav-link active" href="{{ url('/admin/notes') }}"><strong>Catatan</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/cms') }}"><strong>CMS</strong></a>
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
        <h2 class="my-4" style="color:black">Semua Catatan</h2>
        <a href="{{ route('admin.notes.create') }}" class="btn btn-primary mb-3">+ Tambah Article</a>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="table-responsive">
            <table id="article-table" class="display">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
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
                            return '<a href="/admin/notes/' + data + '/edit" class="btn btn-primary btn-sm">Edit</a> ' +
                           '<button class="btn btn-danger btn-sm" onclick="deletePost(' + data + ')">Delete</button>';
                        }
                    }
                ]
            });
        });

        function editPost(id) {
            window.location.href = '/edit/' + id;
        }

        function deletePost(id) {
            if (confirm('Are you sure you want to delete this post?')) {
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
        }

    </script>

</body>
</html>