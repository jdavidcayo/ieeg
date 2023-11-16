                        <!-- Ubica donde mas te parezca este nav con su name ya esta con el menu hamburguesa y bootstrap -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
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
                    <div>
                        <div class="d-flex align-items-center">
                    <ul class="navbar-nav mx-auto">
                        <!-- Authentication Links -->
                        @if (Auth::check())
                        <li class="nav-item mx-4  mt-4 text-white gotham">Hola <span class="gothamB">{{ Auth::user()->name }}</span></li>
                    @else
                    @endif
                    <img class="avatar img-thumbnail m-3 rounded-circle" style="width: 50px; height: 50px; border: 3px solid #b3345b;" src="{{ asset('assets/img/AvatarH.png') }}">
                    </ul>
                    </div>
                    <div class="input-with-icon d-inline-block position-relative" style="width: 96%;">
                        <input class="busquedas w-100 box-sizing-border-box rounded-pill" type="text" name="Busquedas" id="Busquedas" placeholder="Búsqueda" 
                        style="padding: 10px 40px 10px 10px; border: 1px solid #ccc; height: 40px;">
                        <button type="submit" class="lupa__button btn btn-transparent p-0 border-0 position-absolute translate-middle-y top-50" style="right: 2px;">
                            <img class="img__buscar mx-0 img-fluid" style="width: 40px;" src="{{ asset('assets/img/Buscar.png') }}" alt="Lupa">
                        </button>
                    </div>
                </div>
            </nav>
        </div>
            <!-- Nueva sección para la segunda navbar -->
            <section>
                <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav mx-auto justify-content-center text-crema">
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
