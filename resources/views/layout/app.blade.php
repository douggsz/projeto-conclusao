<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="{{ asset('assets/css/Footer-Dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/input.css') }}">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid">
        <a class="navbar-brand" style="filter: brightness(54%);border-color: rgba(255,255,255,0.9);color: #d3d4d9;
        font-size: 2em; text-align: justify;font-family: 'Roboto Condensed', sans-serif;"
        href="{{route('inicio')}}">Inicio</a>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" style="font-size: 1.2em;">
                    <a class="nav-link" style="color: rgb(211,212,217);" href="{{route('biblioteca')}}">Biblioteca</a>
                </li>
            </ul>
        </div>
        <a class="nav-link texto__correcao" href="{{route('login')}}">Login</a>
        <a class="nav-link texto__correcao" href="{{route('cadastro')}}">Cadastrar</a>
    </div>
</nav>
<div>
    <div class="container" style="font-family: 'Roboto Condensed', sans-serif;font-size: 3em;">
        <main role="main">
            @hasSection('corpo')
                @yield('corpo')
            @endif<h3 style="margin-top: 10rem">Prototipo v120213103</h3>
        </main>
    </div>
</div>
<div class="footer-dark">
    <footer>
        <div class="container">
            <p class="copyright" style="color: rgb(211,212,217);text-align: center; opacity: 0.65;padding: 0;">
                Douglas Barbosa © 2021</p>
        </div>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
    </footer>
</div>
</body>
</html>
