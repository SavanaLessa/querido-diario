<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::middleware('auth')->group(function (){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'anotacoes'], function (){
        Route::get('/', 'AnotacoesController@index')->name('anotacoes.index');
        Route::get('/show/{uuid}', 'AnotacoesController@show')->name('anotacoes.show');
        Route::get('/create', 'AnotacoesController@create')->name('anotacoes.create');
        Route::post('/store', 'AnotacoesController@store')->name('anotacoes.store');
    });

    Route::group(['prefix' => 'exercicios'], function (){
        Route::get('/', 'ExerciciosController@index')->name('exercicios.index');
    });

    Route::group(['prefix' => 'registroCrises'], function (){
        Route::get('/', 'RegistroCriseController@index')->name('registro.crises.index');
        Route::get('/create', 'RegistroCriseController@create')->name('registro.crises.create');
        Route::post('/store', 'RegistroCriseController@store')->name('registro.crises.store');
    });

});


