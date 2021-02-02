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

//home
Route::get('/', 'Homecontroller@index')->name('home');

//rotte pubbliche
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{slug}', 'PostController@show')->name('posts.show');

//rotte per il login
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')
    ->namespace('Admin')//controller creato
    ->name('admin.')
    ->middleware('auth')//rotte protette da autenticazione
    ->group(function() {
            //definiamo le rotte
            Route::get('/', 'HomeController@index')->name('home');

            //route post crud
            Route::resource('posts', 'PostController');
    });