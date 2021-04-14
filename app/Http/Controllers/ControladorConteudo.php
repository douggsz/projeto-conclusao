<?php

namespace App\Http\Controllers;

use App\Models\Conteudo;
use App\Models\User;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class ControladorConteudo extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $conteudo = new Conteudo();
        $conteudo->titulo = $request->titulo;
        $conteudo->url = $request->url;
        $conteudo->descricao = $request->descricao;
        $conteudo->categoria_id = $request->categoria;
        $conteudo->user_id = session()->get('userID');
        $conteudo->save();

        return redirect()->route('biblioteca');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Conteudo::all()->find($id)->delete();
        return redirect()->route('biblioteca');
    }
}
