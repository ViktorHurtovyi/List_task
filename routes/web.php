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
Route::group(['prefix' => 'user', 'middleware' =>'auth'], function(){
   Route::get('/', 'user\listController@index')->name('index');
   Route::get('/edit', 'user\listController@edit')->name('edit');
   Route::post('/edit', 'user\listController@editPost');
   Route::post('/', 'user\listController@delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
