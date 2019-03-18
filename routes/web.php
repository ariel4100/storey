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
    return view('page.home.index');
});*/

Auth::routes();


//---------FRONTEND------------//
Route::get('/', 'SessionHomeController@index')->name('home');
Route::get('/empresa', 'SessionEmpresaController@index')->name('empresa');
Route::get('/productos', 'SessionProductoController@index')->name('productos');
Route::get('/descargas', 'SessionDescargaController@index')->name('descargas');
Route::get('/soluciones-a-medida', 'SessionMedidaController@index')->name('medidas');
Route::get('/servicios', 'SessionServicioController@index')->name('servicios');
Route::get('/calidad', 'SessionCalidadController@index')->name('calidad');
Route::get('/blog', 'SessionBlogController@index')->name('blog');
Route::get('/contacto', 'SessionContactoController@index')->name('contacto');


//---------BACKEND------------//

Route::prefix('adm')->group(function (){

    Route::resource('home','HomeController');
});