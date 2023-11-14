<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm py-4">
            <div class="container col-lg-12">

                <a class="navbar-brand col-lg-2" href="{{ url('/inicio') }}">
                    <img src="{{ asset('assets/img/Logo-IEEG.png') }}" alt="Logo ieeg" width="120px">
                </a>
                <h5 class=" text-crema gothamB">Biblioteca Digital del Régimen Especial Sancionador</h5>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown ms-auto">
                                <div class="d-flex flex-column col-lg-3">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle gothamB" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        Hola
                                        <span class="text-crema ms-2">
                                            {{ Auth::user()->name }}
                                        </span>
                                        <img src="{{ asset('assets/img/AvatarM.png') }}" alt="Avatar" width="40"
                                            class="ms-2">
                                    </a>

                                    <form class="d-flex search-input ms-auto">
                                        @csrf
                                        <input class="form-control rounded-pill" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <img class="search-icon ms-2" src="{{ asset('assets/img/Buscar.png') }}"
                                            alt="Search icon" width="25px">
                                    </form>

                                </div>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                </div>

            </div>
        </nav>



        <main class="container d-flex flex-column  align-items-center justify-content-center align-content-center py-4">
            @yield('content')
        </main>


        <footer class="p-4 d-flex justify-content-center align-content-center " style="background-color: #dfdede">
            <p class="text-secondary gothamText footer">IEEG 2018 - 800 433 4486 - Carretera Guanajuato Puentecillas km.
                2 + 767, Colonia Puentecillas - C.P. 36263 - Guanajuato, Gto. - Conmutador (473) 735-3000.</p>
        </footer>


    </div>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
