<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\usuario;
use App\models\endereco;

class NovoController extends Controller
{
    public function welcome(){
        return view ('welcome');
    }

    public function create(){
        return view ('endereco.showEndereco');
    }

    public function save(Request $request){
        $usuario = new Usuario;
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha =$request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();

        $endereco = new Endereco();
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado =$request->estado;
        $endereco->complemento = $request->complemento;
        $endereco->numero = $request->numero;
        $endereco->logradouro = $request->logradouro;
        $endereco->cep = $request->cep;
        $endereco->usuario_id = $usuario->id;
        $endereco->save();  
        return redirect (route ('listaEndereco'));
    }
}
