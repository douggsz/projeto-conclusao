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
        @if(session()->has('user'))
            <a class="nav-link text-white" href="/usuario/{{ session()->get('username') }}">{{ session()->get('user') }}</a>
            @if(session()->get('tipo') == "3")
                <a class="nav-link texto__correcao" href="{{route('cadastro')}}">Cadastrar</a>
            @endif
            <a class="nav-link" href="{{ route('usuario.sair') }}">Sair</a>
        @else
            <a class="nav-link texto__correcao" href="{{route('login')}}">Login</a>
            <a class="nav-link texto__correcao" href="{{route('cadastro')}}">Cadastrar</a>
        @endif
    </div>
</nav>
