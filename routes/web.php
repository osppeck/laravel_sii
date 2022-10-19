<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/buzon', 'buzon')->name('buzon');
Route::view('/correo', 'correo')->name('correo');

Route::get('/contactosweb2', function () {
    return "sección de contactos";
})->name('contactos');


Route::get('/links', function () {
    echo "<a href='" . route('contactos') . "'>Contactos1 </a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos2 </a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos3 </a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos4 </a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos5 </a><br>";
});

Route::get('/controlesc', function() {
    return "Hola desde la página de  CONTROL ESCOLAR";
});

Route::get('/tutor', function () {
    return "Hola desde la página de tutor";
});

Route::get('saludos/{nombre}', function ($nombre) {
    return "Saludos " . $nombre;
});

Route::get('/saludo/{apellido?}', function ($apellido= "no last name") {
    return "Holas " . $apellido;
});