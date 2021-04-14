@extends('layout.app')
@section('titulo', Session()->get('user'))
@section('corpo')
    <section>
        <header>
            <h3><a class="nav-link" href="{{route('biblioteca')}}">
                    <span style="font-size: 40%"><b>← voltar</b></span></a>{{session()->get('user')}}</h3>
            @if(session()->get('tipo') == 1)
                <h6>ALUNO</h6>
            @elseif(session()->get('tipo') == 2)
                <h6>PROFESSOR</h6>
            @elseif(session()->get('tipo') == 3)
                <h6>ADMINISTRADOR</h6>
            @endif
        </header>
        <main role="main">
            <div class="container-fluid">
                <div class="row">
                    <h4 class="texto__correcao">Conteudos</h4>
                    @isset($conteudos)
                        @foreach($conteudos as $conteudo)
                            @isset($conteudo)
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow bg-transparent">
                                        <img class="card-img-top" alt="Conteudo" height="100%"
                                             src="https://images.pexels.com/photos/4145190/pexels-photo-4145190.jpeg">
                                        <div class="card__text" style="padding: 1em">
                                            <p>{{$conteudo->descricao}}</p>
                                            <p>{{$conteudo->categoria->descricao}}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="text-muted">{{$conteudo->created_at}}</h6>
                                            </div>
                                        </div>
                                        <a class="btn btn-sm bg-transparent text-white" id="btn_excluir_conteudo"
                                           href="/conteudo/excluir/{{$conteudo->id}}">apagar</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <h2>Não há videos publicados</h2>
                    @endif
                    <div class="texto__correcao">
                        <button class="btn btn-sm bg-transparent text-white nav-link"
                                id="btn_novo_conteudo" href="#novo_conteudo"
                                aria-controls="novo_conteudo" aria-expanded="false"
                                data-target="#novo_conteudo" data-toggle="collapse">
                            <h6 class="text-primary font-weight-bold m-0">+ Novo conteúdo</h6>
                        </button>
                        <div class="collapse" tabindex="-1" id="novo_conteudo">
                            <form style="padding: 1rem" method="POST" action="{{route('conteudo.novo')}}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <label for="titulo">Titulo</label>
                                    <input type="text" class="form__field" placeholder="Titulo" name="titulo"
                                           id='titulo' required/>
                                </div>
                                <div>
                                    <label for="url">URL</label>
                                    <input type="text" class="form__field" placeholder="URL" name="url" id='url'
                                           required/>
                                </div>
                                <div>
                                    <label for="descricao">Descrição</label>
                                    <input type="text" class="form__field" placeholder="Descrição"
                                           name="descricao"
                                           id='descricao' required/>
                                </div>
                                <div>
                                    <label for="categoria">Categoria</label>
                                    <input type="text" class="form__field" placeholder="Categoria"
                                           name="categoria"
                                           id='categoria' required/>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="bg-transparent btn btn-sm text-white"
                                            id="btn_salva_conteudo">Salvar
                                    </button>
                                    <button type="reset" class="bg-transparent btn btn-sm text-white"
                                            id="btn_reset_conteudo">Cancelar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
