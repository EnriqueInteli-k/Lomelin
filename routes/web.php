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

//Auth::routes();

//Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Register
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('register_referidos', 'Auth\RegisterController@showRegistrationFormReferidos')->name('register_referidos');
Route::post('register', 'Auth\RegisterController@register');

//password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

//Email Verification Route(s)
/*
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
*/



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



//Func
Route::post('agregaReferidor', ['uses' =>'ReferidoController@agregar'])->name('agregaReferidor');
Route::post('modifyUser', ['uses' =>'UserController@modificar'])->name('modifyUser');

Route::get('addProperty', 'PropiedadController@agregar')->name('addProperty');
Route::post('agregarPropiedad', ['uses' =>'PropiedadController@agrega_propiedad'])->name('agregarPropiedad');





