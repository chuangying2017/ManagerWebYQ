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

Route::group(['namespace' => 'Test','prefix'=>'test'],function(){
        Route::resource('templates','TestController');
});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test','HomeController@test');

Route::get('/index','Communication\IndexController@entrance');
