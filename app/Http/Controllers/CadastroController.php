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
}
