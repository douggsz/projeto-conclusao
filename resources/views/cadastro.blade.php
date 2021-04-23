@extends('layout.app')
@section('titulo', 'Cadastro')
@component('componentes.navegacao')
@endcomponent
@section('corpo')
    <section>
        <img class="form__foto" src="https://images.pexels.com/photos/2173508/pexels-photo-2173508.jpeg"
             style="margin-top: -2rem" alt="Ensino digital" height="70%" width="50%">
        <div style="text-align: center;">
            <form method="POST" action="{{route('usuario.novo')}}" enctype="multipart/form-data">
                @csrf
                <div class="form__group">
                    <input type="text" class="form__field"
                           placeholder="Nome" name="nome" id='nome' required/>
                    <label for="usuario" class="form__label">Nome</label>
                    @if($errors->has('nome'))
                        <div class="texto__erro">
                            <p class="text-danger"> {{$errors->first('nome')}}</p>
                        </div>
                    @endif
                </div>
                <div class="form__group">
                    <input type="text" class="form__field"
                           placeholder="Usuario" name="user" id='user' required/>
                    <label for="usuario" class="form__label">Usuario</label>
                    @if($errors->has('user'))
                        <div class="texto__erro">
                            <p class="text-danger"> {{$errors->first('user')}}</p>
                        </div>
                    @endif
                </div>
                <div class="form__group">
                    <input type="password" class="form__field"
                           placeholder="Senha" name="password" id='password'
                           required/>
                    <label for="senha" class="form__label">Senha</label>
                    @if($errors->has('password'))
                        <div class="texto__erro">
                            <p class="text-danger"> {{$errors->first('password')}}</p>
                        </div>
                    @endif
                </div>
                <div class="form__group">
                    <select class="form__field" name="tipo" id="tipo" required>
                        <option value="1">Aluno</option>
                        @if(session()->get('tipo') == "3")
                            <option value="2">Professor</option>
                            <option value="3">Admin</option>
                        @endif
                    </select>
                    <label for="tipo" class="form__label">Tipo</label>
                </div>
                <div class="form__group" style="margin-top: 0rem">
                    <button type="submit">Enviar</button>
                    <button type="reset">Limpar</button>
                </div>
            </form>
        </div>
    </section>
@endsection
