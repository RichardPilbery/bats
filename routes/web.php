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

Auth::routes();
// Route::get('/register', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/app', 'HomeController@app')->name('app');
Route::get('/privacy', 'HomeController@privacy')->name('privacy');

//Route::resource('criteria', 'CriteriaController');
Route::get('/criteria', 'CriteriaController@index');
Route::get('/criteria/create', 'CriteriaController@create');
Route::post('/criteria', 'CriteriaController@store');
Route::get('/criteria/{criteria}/edit', 'CriteriaController@edit');
Route::patch('/criteria/{criteria}', 'CriteriaController@update');

Route::resource('txa', 'TxaController');
