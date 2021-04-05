<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ControladorUsuario extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {

    }

    private function autentificacaoUsuario($user) //recebe o usuario enviado
    {
        if (isset($user)) { // verifica novamente se o usuario esta preenchido
            $users = User::all(); // carrega os usuarios cadastrados atraves do modelo
            foreach ($users as $u) { // este metodo percorre todos os usuarios disponiveis
                if ($user === $u->user) { // terceira verificação
                    echo '<br />validação 2 concuida - usuario encontrado';
                    return true; // caso o usuario esta cadastrado é retornado um sim
                }
            }
        }
        echo '<br />validação 2 não concuida - usuarios não preenchido';
        return false; // nega o acesso case não passe pela validação
    }

    private function autenticacaoSenha($pass) // recebe a senha do usuario apos passar pela segunda validação
    {
        if (isset($pass)) { // verifica novamente se a senha foi preencida
            $passes = User::all(); // carrega todas as senhas cadastradas
            foreach ($passes as $p) { // percorre todas as senhas
                if ($pass === $p->password) { // quinta verificação
                    echo '<br />validação 5 concuida - login autorizado';
                    return true; // caso a senha esta correta é retornado um sim e o usuario é autorizado a logar
                }
            }
        }
        echo '<br />validação 4 não concuida - senha não peenchida';
        return false; // nega o acesso case não passe pela validação
    }

    public function loginUsuario(Request $request) // função para login do usuario
    {
        $request->validate([ //primeira validação
            'user' => 'required|min:2',  //se o usuario foi preenchido
            'password' => 'required|min:8', //se a senha foi preenchida
        ]);

        $credenciais = [ //variavel que guarda as informações após verificação
            'user' => $request->user,
            'password' => $request->password,
        ];
        echo '<br />validação 1 concuida - dados preenchidos';
        if ($this->autentificacaoUsuario($credenciais['user'])) { // segunda validação
            echo '<br />validação 3 concuida - usuario cadasrado';
            if ($this->autenticacaoSenha($credenciais['password'])) { // quarta validação
                echo '<br />validação 5 concuida - login autorizado';
                return redirect()->route('biblioteca'); // após login usuario é direcionado à biblioteca
            } else {
                echo '<br />validação 5 não concuida - senha incorreta';
                return back(); // caso a senha estiver incorreta é direcionado a pagina de login novamente
            }
        } else {
            echo '<br />validação 3 não concuida - usuario não encontrado';
            return back(); // caso o usuario estiver incorreto ele é direcionado ao login novamente
        }
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->nome = $request->nome;
        $usuario->user = $request->user;
        $usuario->password = $request->password;
        $usuario->tipo_usuario_id = $request->tipo;
        $usuario->save();
        return redirect()->route('login');
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
        //
    }
}
