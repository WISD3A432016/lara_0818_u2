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

/*
//Exercise1-2
Route::get('home',function(){
    return view('home');
});
*/
/*
//Exercise1-6
Route::get('home',function(){
    return view('home.index');
});
*/

//Exercise3-3
Route::get('hello/{name?}', ['as' => 'hello.index', 'uses' => 'HelloController@index']);

