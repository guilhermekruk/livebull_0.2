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


    Route::group(['prefix'=>'animal'], function (){
        Route::get('/',             ['as'=>'animal.index'   ,   'uses'=>'ControllerCadAnimal@index']);
        Route::get('cadastro',      ['as'=>'animal.criar'   ,   'uses'=>'ControllerCadAnimal@create']);
        Route::post('grava',         ['as'=>'animal.grava'   ,   'uses'=>'ControllerCadAnimal@store']);
        Route::get('busca',         ['as'=>'animal.busca'   ,   'uses'=>'ControllerCadAnimal@show']);
        Route::get('editar/{id}',        ['as'=>'animal.editar'  ,   'uses'=>'ControllerCadAnimal@edit']);
        Route::post('alterar/{id}',       ['as'=>'animal.alterar' ,   'uses'=>'ControllerCadAnimal@update']);
        Route::get('deletar/{id}',       ['as'=>'animal.deletar' ,   'uses'=>'ControllerCadAnimal@destroy']);
    });

