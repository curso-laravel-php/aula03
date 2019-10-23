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

use Illuminate\Http\Resources\Json\Resource;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teste/{sobrenome}', 'TesteController@index');

Route::get('/boa-tarde/{nome?}', 'TesteController@boaTarde');

Route::get('/single-controller', 'ForeverAloneController');

Route::resource('/party', 'PartyGuyController');