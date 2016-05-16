<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('layout.master');
});
Route::any('administar/platos',  'PlatosController@administrarPlatos');
Route::any('agregar/platos',  'PlatosController@registarPlato');
Route::post('guardar/plato', 'PlatosController@guardarPlato');
Route::get('tableta', 'TabletaController@administrarTableta');
Route::get('tableta/nuevatableta', 'TabletaController@nuevatableta');
Route::post('tableta/guardartableta', 'TabletaController@guardartableta');
Route::get('tableta/editartableta', 'TabletaController@editartableta');
Route::get('tableta/eliminartableta', 'TabletaController@eliminartableta');

Route::get('cliente', 'ClienteController@listacliente');
Route::get('cliente/nuevocliente', 'ClienteController@nuevocliente');
Route::post('cliente/guardarcliente', 'ClienteController@guardarcliente');
Route::get('cliente/editarcliente', 'ClienteController@editarcliente');
Route::get('cliente/eliminarcliente', 'ClienteController@eliminarcliente');

Route::get('Tab_log', 'Tab_logController@listaTab_log');
Route::get('Tab_log/nuevotab_log', 'Tab_logController@nuevoTab_log');
Route::post('Tab_log/guardartab_log', 'Tab_logController@guardarTab_log');
Route::get('Tab_log/editartab_log', 'Tab_logController@editarTab_log');
Route::get('Tab_log/eliminartab_log', 'Tab_logController@eliminarTab_log');