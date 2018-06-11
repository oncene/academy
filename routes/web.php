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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth','namespace' => 'System'], function () {
    Route::get('/filemanager', function (){ return view('pages.filemanager_todo'); })->name('filemanager');

    Route::resource('/calendario', 'CalendarioController', ['except' => ['show', 'create']]);
    Route::get('calendario/calendar','CalendarioController@getCalendar');

    Route::post('/conf','ConfiguracionController@update')->name('configur');

});