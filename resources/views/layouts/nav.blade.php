<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>AditAgain - @yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
<style>
    
    nav h1 {
        font-family: 'Saira Stencil One', cursive;
    }
</style>
</head>
<body>
    @section('navbar')
    <!-- Navbar with login, register etc -->
    <nav class="navbar navbar-expand-lg bg-dark py-3">
        <a href="/" class="navbar-brand">
            <img class="px-5 d-none d-sm-block" src="{{asset('assets/svg/aa-logo-nav.png')}}">
        
        <div class="container"><h1 class="text-light">AditAgain</h1></a></div>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>   
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/mines" class="text-light nav-link">mines</a></li>
                <li class="nav-item"><a href="/quarries" class="text-light nav-link">quarries</a></li>
                @if (Route::has('login'))
                    <div class="hidden collapse navbar-collapse">
                        @auth
                        <li class="nav-item"><a href="/forum" class="text-light nav-link">forum</a></li>
                            @else
                            <li class="nav-item"><a href="/login" class="text-warning nav-link">login</a></li>
                                @if (Route::has('register'))
                                <li class="nav-item"><a href="/register" class="text-warning nav-link">register</a></li>
                            @endif
                        @endauth
                        @if (Route::has('login'))
                            <div class="hidden collapse navbar-collapse">
                                @auth
                                    <li class="nav-item"><a href="/profile" class="text-warning nav-link">{{ Auth::user()->username }}</a></div>
                                    <li class="nav-item"><a href="/logout" class="text-light text-lead nav-link">LOGOUT</a></li>
                                @endauth
                        @endif
                    </div>
                    </div>
                @endif
            </ul>
        </div>
    </nav>
    @show
    
    
    
    <!-- content top section -->
    <div class="fluid">
        @yield('top-section')
    </div>

    <div class="container">@yield('body-section')</div>
</body>
</html>