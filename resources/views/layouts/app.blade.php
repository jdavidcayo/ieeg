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

<style>
.input-with-icon {
    display: inline-block;
    position: relative;
    max-width: 315px;
}
 .busquedas {
    padding: 10px 40px 10px 10px; 
    border: 1px solid #ccc;
    width:100%;
    box-sizing: border-box;
    border-radius: 100px;
    height: 40px;

}
.lupa__button {
    position: absolute;
    right: 2px;
    padding-right: 0px;
    top: 50%;
    transform: translateY(-50%);
    background: transparent;
    border: none;
    cursor: pointer;
}
.img__buscar {
    width: 40px; 
    height: auto;
    margin: 2px 0 0 0;
}
</style>
</head>

<body>
    <header>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm py-4">
            <div class="container col-lg-12">

                <a class="navbar-brand col-lg-2" href="{{ url('/inicio') }}">
                    <img src="{{ asset('assets/img/Logo-IEEG.png') }}" alt="Logo ieeg" width="120px">
                </a>
                <h5 class=" text-crema gothamB">Biblioteca Digital del Régimen Especial Sancionador</h5>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-flex flex-column align-items-center" id="navbarSupportedContent">
          
                    <ul class="navbar-nav flex-column align-items-center d-md-none d-lg-none collapse" id="navbarSupportedContent">
                        <li class="nav-item">MANUALES</li>
                        <li class="nav-item">FOLLETOS</li>
                        <li class="nav-item">FORMATOS</li>
                        <li class="nav-item">CATÁLOGOS</li>
                        <li class="nav-item">DOCUMENTOS</li>
                        <li class="nav-item">COMPENDIOS</li>
                        <li class="nav-item">CÁPSULAS</li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <div class="input-with-icon">
                        <input class="busquedas" type="text" name="Busquedas" id="Busquedas" placeholder="Búsqueda">
                        <button type="submit" class="lupa__button">
                            <img class="img__buscar" src="{{ asset('assets/img/Buscar.png') }}" alt="Lupa">
                        </button>
                    </div>
                </div>
            </div>

        </nav>

    </header>



        <main class="container d-flex flex-column  align-items-center justify-content-center align-content-center py-4">
            @yield('content')
        </main>


        <footer class="p-4 d-flex justify-content-center align-content-center " style="background-color: #dfdede">
            <p class="text-secondary gothamText footer" style="margin-top:40px">IEEG 2018 - 800 433 4486 - Carretera Guanajuato Puentecillas km.
                2 + 767, Colonia Puentecillas - C.P. 36263 - Guanajuato, Gto. - Conmutador (473) 735-3000.</p>
        </footer>


    </div>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
