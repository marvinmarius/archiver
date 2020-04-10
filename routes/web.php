<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


/*Route::group(['namespace'=>'auth'],function ()
{
    Route::get('logins', 'LoginsController@create')->name('login');
    Route::post('logins', 'LoginsController@store');
    Route::get('logout', 'LoginsController@destroy')->name('logout');
});*/


Route::get('/home', 'HomeController@index')->name('home');
