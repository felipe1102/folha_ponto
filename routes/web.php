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

Route::get('/login', 'LoginUsuarioController@telaLogin');

Route::post('/login', 'LoginUsuarioController@loginUsuario');

Route::get('/logout', 'LoginUsuarioController@logoutUsuario');



//pagina home que lista todos os registros de ponto do usuario logado
Route::get('/home', 'HomeController@index');

//TEla de registro de ponto
Route::get('/', 'PontoController@indexPonto');

Route::post('/cadastroPonto', 'PontoController@cadastroPonto');





//supervisor
//Lista todos os funcionariso do superfisor logado
Route::get('/listaFuncionarios', 'SupervisorController@listaFuncionarios');


/*justificativas*/
Route::get('/listaJustificativaFuncionarios', 'JustificativaController@listaJustificativas');
Route::get('/justificativa_supervisor/{id}', 'SupervisorController@justificativaFuncionario');



Route::post('/aceitarJustificativa', 'JustificativaController@aprovarJustificativa');














//RH
//lista todos os funcionarios cadastrados
Route::get('/listaFuncionariosRh', 'RHController@listaFuncionariosRh');

//tela de cadastro do funcionario
Route::get('/cadastroUsuario', 'UsuarioController@telaCadastroUsuario' );
//cadastra um funcionario
Route::post('/cadastrarUsuario','UsuarioController@cadastrarFuncionario' );

Route::post('/fecharDia', 'PontoController@fecharPontoDia');

Route::get('/listaFuncionariosFolha', 'FolhaController@listaFuncionariosFolha' );

Route::get('/folha/{id}', 'FolhaController@folha');




/*Justificativas*/
Route::get('/justificativa/{id}', 'JustificativaController@justificativa' );

Route::post('/cadastraJustificativa', 'JustificativaController@cadastroJustificativa');



//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
