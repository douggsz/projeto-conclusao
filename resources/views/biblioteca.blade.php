@extends('layout.app')
@section('titulo','Biblioteca')
@component('componentes.navegacao')
@endcomponent
@section('corpo')
    <section>
        <div class="album py-5">
            <div class="container-fluid">
                <div class="row">
                @isset($conteudos) <!-- verifica se o array veio preenchido --->
                @foreach($conteudos as $conteudo) <!-- percorre dos os conteudos-->
                    @isset($conteudo)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow bg-transparent">
                                <iframe height="auto" src="{{$conteudo->url}}"
                                        frameborder="0" allowfullscreen></iframe>
                                <div class="card__text">
                                    <p>{{$conteudo->descricao}}</p>
                                    <p>{{$conteudo->categoria->descricao}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="text-muted">{{$conteudo->created_at}}</h6>
                                        @foreach($usuarios as $u)
                                            @if($u->id == $conteudo->user_id)
                                                <h6 class="text-muted">{{$u->user}}</h6>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
                    @else
                        <div style="text-align: center;"><h2>Não há videos</h2></div>
                        <!-- apresenta a mensagem para o usuario -->
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
