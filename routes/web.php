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
Route::get('/', 'FrontendController@home')->name('home');
Route::get('/empresa', 'FrontendController@empresa')->name('empresa');
Route::get('/productos', 'SessionProductoController@index')->name('productos');
Route::get('/descargas', 'FrontendController@descargas')->name('descargas');
Route::get('/soluciones-a-medida', 'FrontendController@soluciones')->name('medidas');
Route::get('/servicios', 'FrontendController@servicios')->name('servicios');
Route::get('/calidad', 'FrontendController@calidad')->name('calidad');
Route::get('/blog', 'SessionBlogController@index')->name('blog');
Route::get('/contacto', 'FrontendController@contacto')->name('contacto');


//---------BACKEND------------//

Route::prefix('adm')->group(function (){

    Route::resource('home','HomeController');
});