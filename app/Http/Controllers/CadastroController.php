<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function cadastro()
    {
        return view ('cadastro');
    }

    public  function salvar (Request $request)
    {
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->matricula = $request->matricula;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha; 
        $usuario->save();

        return  view ('usuario.show', compact ('usuario'));
    }

    public function listarUsuarios()
    {
        $usuarios = Usuario::All();
        return view ('usuario.lista', compact ('usuarios'));
    }

    public function editarUsuario ($id)
    {
        $usuario = Usuario::where('id', $id)->first();
        return  view ('usuario.edit', compact ('usuario'));
    }

    public  function salvarEdicao (Request $request)
    {
        $usuario = Usuario::where('id', $request->id)->first();
        $usuario->nome = $request->nome;
        $usuario->matricula = $request->matricula;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha; 
        $usuario->update();

        return redirect (route ('listarUsuarios'));
    }

    public function excluirUsuario ($id)
    {
        //$usuario = Usuario::where('id', $id)->first();
        Usuario::destroy($id);
        
        return redirect (route ('listarUsuarios'));
    }
}
