<?php

use App\Http\Controllers\ControladorUsuario;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/biblioteca', function () {
    return view('biblioteca');
})->name('biblioteca');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::post('/usuario/novo',    [ControladorUsuario::class, 'store'])       ->name('usuario.novo');
Route::post('/usuario/login',   [ControladorUsuario::class, 'loginUsuario'])->name('usuario.login');
