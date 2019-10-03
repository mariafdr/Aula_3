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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teste', 'TesteController@index')->name('teste');
Route::post('/testePOST', 'TesteController@posta')->name('posta');
Route::put('/testePUT', 'TesteController@put')->name('put');
Route::patch('/testePATCH', 'TesteController@patch')->name('patch');
Route::delete('/testeDELETE', 'TesteController@delete')->name('delete');
