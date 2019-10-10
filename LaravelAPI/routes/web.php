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
    return view('welcome');
});

Route::get('bienvenido', function() {
    return 'Hola!';
});

/*Route::get('fotos/{numero?}', function($numero = 'sin numero') {
    return 'Galeria de fotos'.$numero;
})->where('numero','[0-9]+');*/

//Route::view('galeria','fotos',['numero' => 125]);

Route::get('fotos', function(){
    return view('fotos');
})->name('foto');

Route::get('blog',function(){
    return view('blog');
})->name('noticias');




