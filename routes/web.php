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

Route::get('/', 'PagesController@home');

Route::get('/configure','PagesController@config');

Route::get('/control', 'PagesController@control');

Route::get('/performance', 'PagesController@performance');

Route::get('/welcome', 'PagesController@welcome');

/*Routes para Menú configure*/

Route::get('/configure/crearCentroTrabajo', 'ConfigureController@crearCentroTrabajo');
Route::get('/configure/crearOrdenProduccion', 'ConfigureController@crearOrdenProduccion');
Route::get('/configure/crearTiempoCiclo', 'ConfigureController@crearTiempoCiclo');
Route::get('/configure/configurarProducto', 'ConfigureController@configurarProducto');
Route::get('/configure/crearResponsableOP', 'ConfigureController@crearResponsableOP');
Auth::routes();
