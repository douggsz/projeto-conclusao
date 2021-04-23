@extends('layout.app')
@section('titulo', 'Login')
@component('componentes.navegacao')
@endcomponent
@section('corpo')
    <section class="campo__correcao" style="padding: 1em;">
        <img class="form__foto" src="https://images.pexels.com/photos/4145190/pexels-photo-4145190.jpeg"
             style="margin-top: -2.5rem" alt="Ensino digital" height="400px">
        <div style="text-align: center;">
            <form method="POST" action="{{route('usuario.login')}}" enctype="multipart/form-data">
                @csrf
                <div class="form__group">
                    <input type="text" class="form__field" placeholder="Usuario" name="user" id='user' required/>
                    <label for="user" class="form__label">Usuario</label>
                </div>
                <div class="form__group">
                    <input type="password" class="form__field" placeholder="Senha" name="password" id='password' required/>
                    <label for="senha" class="form__label">Senha</label>
                </div>
                <div class="form__group" style="margin-top: 0rem">
                    <button type="submit">Entrar</button>
                    <button type="reset">Limpar</button>
                </div>
            </form>
        </div>
    </section>
@endsection
