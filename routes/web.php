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
    return view('index');
});
Route::get('about', [
    'as' => 'about.index',
    'uses' => 'AboutController@index'
]);
Route::group(['prefix' => 'backstage', 'namespace' => 'Backstage'], function () {
    Route::get('/', [
        'as' => 'backstage.index',
        'uses' => 'IndexController@index'
    ]);
    Route::get('index/', [
        'as' => 'backstage.index',
        'uses' => 'IndexController@index'
    ]);
    Route::post('login', [
        'as' => 'backstage.index.login',
        'uses' => 'IndexController@login'
    ]);
    Route::get('user/index', [
        'as' => 'backstage.user.index',
        'uses' => 'IndexController@index'
    ]);
});




