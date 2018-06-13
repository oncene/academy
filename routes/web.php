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

Route::group(['middleware' => 'auth','namespace' => 'System'], function () {
    Route::get('/administracion', function (){ return view('pages.administracion_todo');})->name('administracion');

    Route::resource('rol','RolController', ['except' => ['index','show', 'create', 'edit','update']]);
    Route::get('userDatatablesPrivilegioAll','RolController@userDatatablesPrivilegioAll')->name('userDatatablesPrivilegioAll.show');
    Route::get('rolDatatablesAll','RolController@rolDatatablesAll')->name('rolDatatablesAll.show');
    Route::get('rolAll','RolController@rolAll')->name('rolAll.show');
    Route::get('permissionWhereRol/{id?}','RolController@permissionWhereRol')->name('permissionWhereRol.show');
    Route::get('roleWhereUser/{id?}','RolController@roleWhereUser')->name('roleWhereUser.show');
    Route::post('permissionWhereRolCreate','RolController@permissionWhereRolCreate')->name('permissionWhereRolCreate.store');
    Route::post('userWhereRolCreate','RolController@userWhereRolCreate')->name('userWhereRolCreate.store');
    Route::get('usersAll','UserController@userAll')->name('usersAll.show');
    Route::delete('userDelete/{id?}','UserController@destroy')->name('user.delete');
    Route::get('userRestore/{id?}','UserController@restore')->name('user.restore');
//    Route::resource('users','UserController');
});












