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
    return view('index');
})->name('index');

//Enviar email
Route::post('/contacto/enviar','Correos@enviarCorreo')->name('email.contacto');


Route::get('/informacion',function(){
    return view('informacion');
})->name('informacion');

Route::get('/contacto', function(){
    return view('contacto');
})->name('contacto');

Route::get('/guias', function () {
    return view('guias');
})->name('guias');

Route::get('/foro','HomeController@foro')->name('foro');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/perfil', 'HomeController@perfil')->name('perfil');

Route::post('/registro', 'RegistroController@registro')->name('registrarse');
Route::put('/perfil', 'HomeController@updateUser')->name('update.user');
Route::put('/updating','HomeController@updateMaestro')->name('update.maestro');
Route::put('/update', 'HomeController@updateAlumno')->name('update.alumno');

Route::post('/newpost','HomeController@createPost')->name('new.post');