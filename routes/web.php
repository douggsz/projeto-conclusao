<?php

use App\Http\Controllers\ControladorConteudo;
use App\Http\Controllers\ControladorUsuario;
use App\Models\Conteudo;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/biblioteca', function () {
    $conteudos = Conteudo::all(); // carrega os conteudos publicados
    if (isset($conteudos)) { // checa se existe algum conteudo
        if (count($conteudos) != 0) { // checa o numero de aulas publicados
            return view('biblioteca', compact('conteudos')); // retorna a biblioteca com os conteudos
        } else {
            return view('biblioteca'); // caso não houver conteudos a biblioteca é carregada
        }
    } else {
        return view('biblioteca'); // caso não houver conteudos a biblioteca é carregada
    }
})->name('biblioteca');

Route::get('/login', function () {
    if (session()->has('user')) {
        return redirect()->route('biblioteca');
    }
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    if (session()->has('user')) {
        if (session()->has('tipo')) {
            if (session()->get('tipo') == '3') {
                return view('cadastro');
            } else {
                return redirect()->route('biblioteca');
            }
        }
    }
    return view('cadastro');
})->name('cadastro');


Route::get('/usuario/logout', [ControladorUsuario::class, 'logout'])->name('usuario.sair');
Route::get('/usuario/{user}', [ControladorUsuario::class, 'show'])->name('usario.perfil');
Route::post('/usuario/novo',  [ControladorUsuario::class, 'store'])->name('usuario.novo');
Route::post('/usuario/login', [ControladorUsuario::class, 'loginUsuario'])->name('usuario.login');
Route::post('/conteudo/novo', [ControladorConteudo::class, 'store'])->name('conteudo.novo');
Route::get('/conteudo/excluir/{id}', [ControladorConteudo::class, 'destroy'])->name('conteudo.excluir');
