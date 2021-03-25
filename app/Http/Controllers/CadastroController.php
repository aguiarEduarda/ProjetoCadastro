<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro()
    {
        return view ('cadastro');
    }
    public  function  salvarCadastro (Request $request)
    {
        //banco de dados imaginário

        return  view ('resultado');
    }
}
