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

Route::get('/', 'pageController@inicio')->name('inicio');

Route::get('bienvenido', function() {
    return 'Hola!';
});

/*Route::get('fotos/{numero?}', function($numero = 'sin numero') {
    return 'Galeria de fotos'.$numero;
})->where('numero','[0-9]+');*/

//Route::view('galeria','fotos',['numero' => 125]);

Route::get('fotos','pageController@fotos')->name('foto');

Route::get('blog','pageController@noticias')->name('noticias');

Route::get('nosotros/{nombre?}', 'pageController@nosotros')->name('nosotros');

Route::get('/detalle/{id?}', 'pageController@detalle')->name('notas.detalle');

Route::post('/', 'pageController@crear')->name('notas.crear');

Route::get('editar/{id}', 'pageController@editar')->name('notas.editar');

Route::put('editar/{id}', 'pageController@update')->name('notas.update');

Route::delete('eliminar/{id}', 'pageController@eliminar')->name('notas.eliminar');
