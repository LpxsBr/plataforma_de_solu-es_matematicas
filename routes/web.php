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

Route::get('/inicio', 'indexController@index')->name('inicio');
Route::get('/quem-somos', 'whoIAmController@quemsomos');
Route::get('/plataforma', 'plataformController@plataforma')->name('plataforma');

Route::get('/', function () {
    return redirect()->route('inicio');
});

// fallback to when not exist route
Route::fallback(function () {
    echo 'a rota acessada não existe. <a href="' . route('inicio') . '">clique aqui</a> para retornar a homepage.  ';
})->name('error 404');
