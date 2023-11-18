<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca IEEG</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

</head>
<body class="">
    <nav class="navbar navbar-expand-lg d-flex justify-content-between mb-3">
        <div class="container">
            <a class="navbar-brand px-3" href="{{ route('login')}}">
                <img src="{{ asset('assets/img/Logo-IEEG.png') }}" alt="Logo" height="70">
            </a>
            <div class="navbar-text px-3 d-flex flex-column text-end text-crema col-sm-8 ">
                <h3 class="mb-0 gothamB">Biblioteca del</h3>
                <h3 class="mb-0 gothamB">Régimen Disciplinador</h3>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
