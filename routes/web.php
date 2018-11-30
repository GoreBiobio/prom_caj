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
    return view('vendor.adminlte.home');
});

Route::get('/Planificacion/Iniciar', 'Planificar@iniciar');
Route::get('/Planificacion/Grilla', 'Planificar@grilla');
Route::get('/Planificacion/Archivo', 'Planificar@archivo');
Route::get('/Planificacion/Gestion', 'Planificar@gestion');

Route::get('/Adm/Institucion', 'Administracion@institucion');
Route::get('/Adm/ClaveAcceso', 'Administracion@clave');
Route::get('/Adm/AcercaDe', 'Administracion@acercade');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
