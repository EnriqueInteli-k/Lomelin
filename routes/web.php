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

/*
Route::get('/', function () {
    return view('home');
});

*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard', 'DashBoardController@index')->name('dashboard');
Route::post('dashboard', 'DashBoardController@index');

//Route::post('loginUser', 'LoginController@login');

Route::get('perfil', 'PerfilController@index')->name('perfil');
Route::post('perfil', 'PerfilController@index');

Route::get('detalle', 'DetalleController@index')->name('detalle');
Route::post('detalle', 'DetalleController@index');

Route::get('listado', 'ListadoController@index')->name('listado');
Route::post('listado', 'ListadoController@index');

Route::get('resultado', 'ResultadoController@index')->name('resultado');

Route::get('verPropiedad/{id}',['uses' =>'DetallePropiedadController@verPropiedad'])->name('verPropiedad'); 
Route::get('getPropiedades/{id}',['uses' =>'ListadoPropiedadesController@ObtenTipoPropiedad'])->name('getPropiedades'); 
Route::get('verPropiedadPropietario/{id}',['uses' =>'DetallePropietarioPropiedadController@verPropiedad'])->name('verPropiedadPropietario'); 


Route::get('verPropiedades',['uses' =>'ListadoPropietarioController@ObtenPropiedades'])->name('verPropiedades'); 



//Route::get('deleteHerramienta/{id}',['uses' =>'HerramientasController@deleteHerramienta'])->name('deleteHerramienta'); 
 
 


