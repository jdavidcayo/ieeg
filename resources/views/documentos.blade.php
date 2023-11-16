<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <h5 class="text-crema gothamB">Biblioteca Digital del Régimen Especial Sancionador</h5>
    
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
            </nav>
    
            <!-- Nueva sección para la segunda navbar -->
            <section class="py-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav mx-auto justify-content-center">
                            <li class="nav-item mx-4">MANUALES</li>
                            <li class="nav-item mx-4">FOLLETOS</li>
                            <li class="nav-item mx-4">FORMATOS</li>
                            <li class="nav-item mx-4">CATÁLOGOS</li>
                            <li class="nav-item mx-4">DOCUMENTOS</li>
                            <li class="nav-item mx-4">COMPENDIOS</li>
                            <li class="nav-item mx-4">CÁPSULAS</li>
                        </ul>
                    </div>
                </nav>
            </section>
        </div>
    </header>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          
</body>
</html>
