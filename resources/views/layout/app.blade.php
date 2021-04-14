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
<section>
    @hasSection('navegacao')
        @yield('navegacao')
    @endif
</section>
<div>
    <div class="container" style="font-family: 'Roboto Condensed', sans-serif;font-size: 3em;">
        <main role="main">
            @hasSection('corpo')
                @yield('corpo')
            @endif
                <h3 style="margin-top: 10rem;" id="tx__prototipo">Prototipo v120213103</h3>
        </main>
    </div>
</div>
<section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <p class="copyright" style="color: rgb(211,212,217);text-align: center; opacity: 0.65;padding: 0;">
                    Douglas Barbosa © 2021</p>
            </div>
            <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>
        </footer>
    </div>
</section>
</body>
</html>
