<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function cadastro(){
        return view ('cadastro');
    }

    public function usuarioEndereco(){
        return view ('usuario_endereco');
    }

    public function listaUsuario()
    {
        $usuarios = Usuario::orderBy("id", "asc")->get();
        return view ('lista', compact ('usuarios'));
    }    
    
    public function salvar(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->matricula = $request->matricula;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha =$request->senha;
        $usuario->save();
        return view('usuario.show', compact('usuario'));
    }

    public function listarUsuarios()
    {      
        $usuarios = Usuario::all();
        return view ('usuario.lista', compact('usuarios'));
    }
  
    public function editarUsuario($id)
    {
        $usuario = Usuario::where('id', $id)->first();
        return view('edit', compact('usuario'));
    }

    public function excluirUsuario($id){
        Usuario::destroy($id);
        return redirect (route ('listarUsuario'));
    }
    public function salvarEdicao(Request $request)
    {
        $usuario = Usuario::where('id', $request->id)->first();
        $usuario->nome = $request->nome;
        $usuario->matricula = $request->matricula;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha =$request->senha;
        $usuario->update();
        return redirect (route ('listarUsuario'));
    }
}
