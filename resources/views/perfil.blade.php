@extends('layout.app')
@section('titulo', Session()->get('user'))
@section('corpo')
    <section class="texto__correcao">
        <header>
            <h3><a class="nav-link" href="{{route('biblioteca')}}">
                    <span style="font-size: 40%"><b>← voltar</b></span></a>{{session()->get('user')}}</h3>
        </header>
        <main role="main">
            <div class="container-fluid">
                <div class="row">
                    <h4 class="texto__correcao">Conteudos</h4>
                @isset($conteudos) <!-- verifica se o array veio preenchido --->
                @foreach($conteudos as $conteudo) <!-- percorre dos os conteudos-->
                    @isset($conteudo)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow bg-transparent">
                                <img class="card-img-top" alt="Conteudo" height="100%"
                                     src="https://images.pexels.com/photos/4145190/pexels-photo-4145190.jpeg">
                                <div class="card__text">
                                    <p>{{$conteudo->descricao}}</p>
                                    <p>{{$conteudo->categoria->descricao}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="text-muted">{{$conteudo->created_at}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
                    @else
                        <div><h2>Não há videos publicados</h2></div>
                    @endif
                    <div class="texto__correcao">
                        <button class="btn btn-sm bg-transparent text-white" id="btn__conteudo">+ Novo conteúdo</button>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <div class="modal" tabindex="-1" id="card__conteudo">
        <div class="modal-dialog modal-lg">
            <div class="card-header">
                <h3>Novo conteúdo</h3>
            </div>
            <form method="POST" action="#" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    <div>
                        <input type="text" class="form__field" placeholder="Nome" name="nome" id='nome' required/>
                        <label for="nome" class="form__label">Nome</label>
                    </div>
                    <div>
                        <input type="text" class="form__field" placeholder="Nome" name="nome" id='nome' required/>
                        <label for="nome" class="form__label">Nome</label>
                    </div>
                    <div>
                        <input type="text" class="form__field" placeholder="Nome" name="nome" id='nome' required/>
                        <label for="nome" class="form__label">Nome</label>
                    </div>
                    <div>
                        <input type="text" class="form__field" placeholder="Nome" name="nome" id='nome' required/>
                        <label for="nome" class="form__label">Nome</label>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="bg-transparent btn btn-sm text-white" id="btn_salva_conteudo">Salvar
                    </button>
                    <button type="reset" class="bg-transparent btn btn-sm text-white" id="btn_reset_conteudo">Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
