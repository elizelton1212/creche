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
Route::get('teste','teste@index');
Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('funcionario','FuncionarioController');
Route::any('cadastrarFuncionario','FuncionarioController@store');
Route::any('cadastrarCandengue','CandengueController@store');
Route::resource('candengue','CandengueController');
Route::resource('propina','PropinaController');
Route::any('cadastrarPropina','PropinaController@store');
Route::resource('atividade','AtividadeController');
Route::any('cadastrarAtividade','AtividadeController@store');
Route::get('pagamentoAtividade','AtividadeController@pagamento');
Route::any('pesquisarNomeCandengue','AtividadeController@pesquisarNomeCandengue');
Route::any('paymentA','AtividadeController@PagamentoA');
Route::get('ListaDePagamentos','AtividadeController@lista');
Route::resource('pa','PAController');
Route::any('pagamentoPropina','PropinaController@pagamento');
Route::any('prop','PropinaController@pagamentoP');
Route::any('consultaPropina','PropinaController@show2');
Route::any('consulta','PropinaController@show');
Route::post('divida','AtividadeController@divida');
Route::any('consultaFuncionario','FuncionarioController@consultar');
Route::any('consultarCandengue','CandengueController@consultar');
Route::any('consultarAtividade','AtividadeController@consultar');
Route::any('/updateAtividade','AtividadeController@update');
Route::any('/updateCandengue','CandengueController@update');
Route::any('/updateFuncionario','FuncionarioController@update');
Route::any('confirmacao','PropinaController@confirmacao');
Route::any('confirmacaoFactura','CandengueController@confirmacao');
Route::resource('transporte','TransporteController');
Route::any('salvarTransporte','TransporteController@store');
Route::any('pagarTransporte', 'TransporteController@pagarTransporte');
Route::any('pagarTransporte1', 'TransporteController@pagarTransporte1');
Route::any('pesquisarTransporte', 'TransporteController@pesquisarTransporte');
Route::resource('turma','CandengueTurmaController');
Route::any('salvarTurma','CandengueTurmaController@store');
Route::any('associarEstudante','CandengueTurmaController@associarEstudante');
Route::any('candengueTurma','CandengueTurmaController@turmaEstudante');
Route::any('/updateTurma','TurmaController@update');
Route::any('/updateTransporte','TransporteController@update');
Route::any('imprimirFuncionario','FuncionarioController@imprimirFuncionario');
Route::any('imprimirCandengue','CandengueController@imprimirCandengue');
Route::any('imprimirAtividade','AtividadeController@imprimirAtividade');
Route::any('imprimirTurma','TurmaController@imprimirTurma');
Route::any('imprimirTransporte','TransporteController@imprimirTransporte');
Route::any('listarIndex','TurmaController@listarIndex');
Route::any('listar','TurmaController@listar');





