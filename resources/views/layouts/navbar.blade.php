<nav class="navbar navbar-expand-md navbar-light"  style="background-color:#8ED1FC;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home.index') }}">
            Robot Brone
        </a>

        <!-- Hamburger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home.index') ? 'active' : '' }}" href="{{ route('home.index') }}">{{ __('Beranda') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.posts.index') ? 'active' : '' }}" href="{{ route('admin.posts.index') }}">{{ __('Berita') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.notes.index') ? 'active' : '' }}" href="{{ route('admin.notes.index') }}">{{ __('Pengumuman') }}</a>
                </li>
            </ul>
            </ul>
        </div>
    </div>
</nav>
