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

//pagina home que lista todos os registros de ponto do usuario logado
Route::get('/home', function () {
    return view('home');
});

//TEla de registro de ponto
Route::get('/', function () {
    return view('ponto');
});

//Justificativa de funcionarios(todos)
Route::get('/justificativa', function () {
    return view('funcionario.justificativa');
});



//supervisor
//Lista todos os funcionariso do superfisor logado
Route::get('/listaFuncionarios', function () {
    return view('supervisor.listaFuncionarios');
});
//Verificação da justificativa do ponto
Route::get('/justificativa_supervisor', function () {
    return view('supervisor.justificativa_func');
});


//RH
//lista todos os funcionarios cadastrados
Route::get('/listaFuncionariosRh', function () {
    return view('RH.listaFuncionariosRh');
});
//cadastra um funcionario
Route::get('/cadastroFuncionario', function () {
    return view('RH.cadastroFuncionario');
});
//edita um funcionario
Route::get('/editarFuncionario', function () {
    return view('RH.editarFuncionario');
});

Route::get('/folhaFuncionario', function () {
    return view('RH.folha');
});





Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
