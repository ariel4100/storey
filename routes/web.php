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

    Route::group(['prefix' => 'slider', 'as' => 'slider'], function() {
        Route::get('{seccion}/create', ['uses' => 'Adm\SliderController@create', 'as' => '.create']);
        Route::post('store', ['uses' => 'Adm\SliderController@store', 'as' => '.store']);
        Route::get('{seccion}/list', ['uses' => 'Adm\SliderController@list', 'as' => '.list']);
        Route::get('edit/{slider}', ['uses' => 'Adm\SliderController@edit', 'as' => '.edit']);
        Route::post('update/{slider}', ['uses' => 'Adm\SliderController@update', 'as' => '.update']);
        Route::get('destroy/{slider}', ['uses' => 'Adm\SliderController@destroy', 'as' => '.destroy']);
    });

    Route::group(['prefix' => 'contenido', 'as' => 'contenido'], function() {
        Route::get('{section}/{tipo}', ['uses' => 'adm\ContentController@list', 'as' => '.list']);
        Route::get('{section}/{tipo}/create', ['uses' => 'adm\ContentController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'adm\ContentController@store', 'as' => '.store']);
        Route::get('{section}/{contenido}/edit', ['uses' => 'adm\ContentController@edit', 'as' => '.edit']);
        Route::post('{contenido}/update', ['uses' => 'adm\ContentController@update', 'as' => '.update']);
        Route::delete('{contenido}/destroy', ['uses' => 'adm\ContentController@destroy', 'as' => '.destroy']);
    });
});