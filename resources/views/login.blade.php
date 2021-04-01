@extends('layout.app')
@section('titulo', 'Login')
@section('corpo')
    <section class="campo__correcao">
        <img class="form__foto" src="https://images.pexels.com/photos/4145190/pexels-photo-4145190.jpeg"
             alt="Ensino digital" height="400px">
        <div style="text-align: center;">
            <form>
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="Usuario" name="usuario" id='usuario' required/>
                    <label for="usuario" class="form__label">Usuario</label>
                </div>
                <div class="form__group field">
                    <input type="password" class="form__field" placeholder="Senha" name="senha" id='senha' required/>
                    <label for="senha" class="form__label">Senha</label>
                </div>
            </form>
        </div>
    </section>
@endsection
