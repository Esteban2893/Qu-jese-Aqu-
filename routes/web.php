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

Route::get('/' , 'HomeController@vistaPrincipal');

Route::get('/home', function () {
    return view('adminlte/home');
});

/*Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
    //        // Uses Auth Middleware
    //    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});*/

Route::resource('entidades', 'EntidadController');
Route::resource('quejas', 'QuejasController');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('activarqueja/{id}', 'QuejasController@activarQuejas');
Route::get('listaquejas', 'QuejasController@listaQuejas');

Route::get('megustaqueja/{id}', 'QuejasController@megustaQuejas');

Route::get('prueba','GraficasController@total_quejas');