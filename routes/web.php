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

//Produtos
Route::get('/Produtos','ProdutoController@listar');
Route::get('/','ProdutoController@listar');
Route::get('/Produtos/remove/{id_produto}','ProdutoController@remove');
Route::get('/Produtos/mostrar/{id_produto}','ProdutoController@mostra');

Route::get('/NovoProduto','ProdutoController@novo');
Route::post('/NovoProduto/adiciona','ProdutoController@adiciona');
Route::post('/NovoProduto/edita/{id_produto}','ProdutoController@edita');


//Categorias
Route::get('/ListarCategoria','CategoriaController@listar');
Route::get('/ListarCategoria/remove/{id_categoria}','CategoriaController@remove');
Route::get('/ListarCategoria/mostrar/{id_categoria}','CategoriaController@mostra');

Route::get('/CadastrarCategoria','CategoriaController@novo');
Route::post('/CadastrarCategoria/adiciona','CategoriaController@adiciona');
Route::post('/CadastrarCategoria/edita/{id_categoria}','CategoriaController@edita');

//Entrada
Route::get('/ListarEntrada','EntradaController@listarEntrada');
Route::get('/ListarEntrada/remove/{id_entrada}','EntradaController@remove');
Route::get('/ListarEntrada/mostrar/{id_entrada}','EntradaController@mostra');
Route::get('/LancarEntrada','EntradaController@novo');
Route::post('/LancarEntrada/adiciona','EntradaController@adiciona');
Route::post('/LancarEntrada/edita/{id_entrada}','EntradaController@edita');


//Saída
Route::get('/ListarSaida','SaidaController@listarSaida');
Route::get('/ListarSaida/remove/{id_saida}','SaidaController@remove');
Route::get('/ListarSaida/mostrar/{id_saida}','SaidaController@mostra');
Route::get('/LancarSaida','SaidaController@novo');
Route::post('/LancarSaida/adiciona','SaidaController@adiciona');
Route::post('/LancarSaida/edita/{id_saida}','SaidaController@edita');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
