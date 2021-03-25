<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro()
    {
        return view ('cadastro');
    }
    public  function cadastroCompleto (Request $request)
    {
        $nomeComp = $request->nomeComp;
        $matricula = $request->matricula;
        $dataNasc = $request->dataNasc;
        $senha = $request->senha; 
        $resultado = $nomeComp;

        return  view ('resultado', compact ('resultado'));
    }
    public function listarUsuarios()
    {
        return view ('lista');
    }
    

}
