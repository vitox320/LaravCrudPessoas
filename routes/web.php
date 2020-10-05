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

Route::get('/pessoas/novo','PessoasController@registrar')->name('cadastro');
Route::post('/pessoas/novo','PessoasController@store')->name('cadastrar_pessoa');
Route::get('/pessoas/index','PessoasController@index')->name('listar_todos');
Route::get('/pessoas/show/{id}','PessoasController@show')->name('listar_um');
Route::get('/pessoas/edit/{id}','PessoasController@edit')->name('editar_pessoa');
Route::post('/pessoas/edit/{id}','PessoasCOntroller@update')->name('atualizar_pessoa');
Route::get('/pessoas/excluir/{id}','PessoasController@destroy')->name('excluir_pessoa');
