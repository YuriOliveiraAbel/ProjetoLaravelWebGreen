<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(["prefix" => "pessoas"], function(){
    Route::get("/","PessoasController@index");
    Route::get("/novo","PessoasController@novoView");
    Route::get("/{id}/editar", "PessoasController@editarView");
    Route::get("/{id}/excluir", "PessoasController@excluirView");
    Route::get("/{id}/destroy", "PessoasController@destroy");
    Route::post("/store","PessoasController@store");
    Route::post("/update","PessoasController@update");

});