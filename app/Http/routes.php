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

Route::get('/admin', function () {
    return view('home');
});

Route::get('/', function () {
    return view('homeCliente');
});

Route::get('/registrarCliente','proyectosController@registrarCli');
Route::get('/registrame','proyectosController@registrarCliente');
Route::post('/guardarCli','proyectosController@guardarCli');
Route::post('/guardarCliente','proyectosController@guardarCliente');
Route::get('/consultarClientes','proyectosController@consultarCli');
Route::get('/eliminarCli/{id}', 'proyectosController@eliminarCli');
Route::get('/editarCli/{id}','proyectosController@editarCli');
Route::post('/actualizarCli/{id}','proyectosController@actualizarCli');
Route::get('/clientesPDF','proyectosController@pdfCli');
Route::get('mailTemplate','proyectosController@guardarCli');

Route::get('/registrarAdministrador','proyectosController@registrarAdmin');
Route::post('/guardarAdmin','proyectosController@guardarAdmin');
Route::get('/consultaAdministradores','proyectosController@consultarAdmin');
Route::get('/eliminarAdmin/{id}', 'proyectosController@eliminarAdmin');
Route::get('/editarAdmin/{id}','proyectosController@editarAdmin');
Route::post('/actualizarAdmin/{id}','proyectosController@actualizarAdmin');
Route::get('/administradoresPDF','proyectosController@pdfAdmin');


Route::get('/registrarPromocion','proyectosController@registrarPromo');
Route::post('/guardarPromo','proyectosController@guardarPromo');
Route::get('/consultarPromo','proyectosController@consultarPromo');
Route::get('/eliminarPromo/{id}', 'proyectosController@eliminarPromo');
Route::get('/editarPromo/{id}','proyectosController@editarPromo');
Route::post('/actualizarPromo/{id}','proyectosController@actualizarPromo');
Route::get('/enviarpromo/{id}', 'proyectosController@enviarpromo');


Route::get('/email', function () {
    return view('mailTemplate');
});



