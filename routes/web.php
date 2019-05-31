<?php

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

//clientes
Route::any('clientes', 'clienteController@index');
Route::any('clientes/cadastroClientes', 'clienteController@create');
Route::any('clientes/cadastroClientes/store', 'clienteController@store');
Route::any('clientes/mostrarCliente/{id}/show', 'clienteController@show');
Route::any('clientes/editarCliente/{id}/edit', 'clienteController@edit');
Route::any('clientes/editarCliente/{id}/update', 'clienteController@update');
Route::get('clientes/deletarCliente/{id}/destroy', 'clienteController@destroy');

//funcionarios
Route::any('funcionarios', 'funcionarioController@index');
Route::any('funcionarios/cadastroFuncionarios', 'funcionarioController@create');
Route::any('funcionarios/cadastroFuncionarios/store', 'funcionarioController@store');
Route::any('funcionarios/mostrarFuncionario/{id}/show', 'funcionarioController@show');
Route::any('funcionarios/editarFuncionario/{id}/edit', 'funcionarioController@edit');
Route::any('funcionarios/editarFuncionario/{id}/update', 'funcionarioController@update');
Route::get('funcionarios/deletarFuncionario/{id}/destroy', 'funcionarioController@destroy');

//fornecedores
Route::any('fornecedores', 'fornecedorController@index');
Route::any('fornecedores/cadastroFornecedores', 'fornecedorController@create');
Route::any('fornecedores/cadastroFornecedores/store', 'fornecedorController@store');
Route::any('fornecedores/mostrarFornecedor/{id}/show', 'fornecedorController@show');
Route::any('fornecedores/editarFornecedor/{id}/edit', 'fornecedorController@edit');
Route::any('fornecedores/editarFornecedor/{id}/update', 'fornecedorController@update');
Route::get('fornecedores/deletarFornecedor/{id}/destroy', 'fornecedorController@destroy');

//embarcações
Route::any('embarcacoes', 'embarcacaoController@index');
Route::any('embarcacoes/cadastroEmbarcacoes', 'embarcacaoController@create');
Route::any('embarcacoes/cadastroEmbarcacoes/store', 'embarcacaoController@store');
Route::any('embarcacoes/mostrarEmbarcacao/{id}/show', 'embarcacaoController@show');
Route::any('embarcacoes/editarEmbarcacao/{id}/edit', 'embarcacaoController@edit');
Route::any('embarcacoes/editarEmbarcacao/{id}/update', 'embarcacaoController@update');
Route::get('embarcacoes/deletarEmbarcacao/{id}/destroy', 'embarcacaoController@destroy');

//modelos
Route::any('modelos', 'modeloController@index');
Route::any('modelos/cadastroModelos', 'modeloController@create');
Route::any('modelos/cadastroModelos/store', 'modeloController@store');
Route::any('modelos/mostrarModelo/{id}/show', 'modeloController@show');
Route::any('modelos/editarModelo/{id}/edit', 'modeloController@edit');
Route::any('modelos/editarModelo/{id}/update', 'modeloController@update');
Route::get('modelos/deletarModelo/{id}/destroy', 'modeloController@destroy');

//tipos
Route::any('tipos', 'tipoController@index');
Route::any('tipos/cadastroTipos', 'tipoController@create');
Route::any('tipos/cadastroTipos/store', 'tipoController@store');
Route::any('tipos/mostrarTipo/{id}/show', 'tipoController@show');
Route::any('tipos/editarTipo/{id}/edit', 'tipoController@edit');
Route::any('tipos/editarTipo/{id}/update', 'tipoController@update');
Route::get('tipos/deletarTipo/{id}/destroy', 'tipoController@destroy');

//marcas
Route::any('marcas', 'marcaController@index');
Route::any('marcas/cadastroMarcas', 'marcaController@create');
Route::any('marcas/cadastroMarcas/store', 'marcaController@store');
Route::any('marcas/mostrarMarca/{id}/show', 'marcaController@show');
Route::any('marcas/editarMarca/{id}/edit', 'marcaController@edit');
Route::any('marcas/editarMarca/{id}/update', 'marcaController@update');
Route::get('marcas/deletarMarca/{id}/destroy', 'marcaController@destroy');

//peças
Route::any('pecas', 'pecaController@index');
Route::any('pecas/cadastroPecas', 'pecaController@create');
Route::any('pecas/cadastroPecas/store', 'pecaController@store');
Route::any('pecas/mostrarPeca/{id}/show', 'pecaController@show');
Route::any('pecas/editarPeca/{id}/edit', 'pecaController@edit');
Route::any('pecas/editarPeca/{id}/update', 'pecaController@update');
Route::get('pecas/deletarPeca/{id}/destroy', 'pecaController@destroy');

//Route::resource('clientes', 'clienteController');
