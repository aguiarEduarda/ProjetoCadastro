<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/cadastro', '\App\Http\Controllers\CadastroController@cadastro')->name('carregarCadastro');

Route::post ('/salvar-usuario', '\App\Http\Controllers\CadastroController@salvar')->name('salvarUsuario');

Route::post ('/salvar-edicao', '\App\Http\Controllers\CadastroController@salvarEdicao')->name('salvarEdicao');

Route::get ('/lista', '\App\Http\Controllers\CadastroController@listarUsuarios')->name('listarUsuarios');

Route::get ('usuario/editar/{id}', '\App\Http\Controllers\CadastroController@editarUsuario')->name('editarUsuario');

Route::get ('usuario/excluir/{id}', '\App\Http\Controllers\CadastroController@excluirUsuario')->name('excluirUsuario');


