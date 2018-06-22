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

    Route::get('matriculacion', function (){ return view('pages.matriculacion_todo');})->name('matriculacion');
    Route::get('calificaciones', function (){ return view('pages.calificacion_todo');})->name('calificaciones');
    Route::get('horarios', function (){ return view('pages.horario_todo');})->name('horarios');
    Route::get('actividades', function (){ return view('pages.actividad_todo');})->name('actividades');
    Route::get('reportes', function (){ return view('pages.reporte_todo');})->name('reportes');
    Route::resource('configuraciones', 'ConfiguracionController', ['except' => ['show', 'create', 'edit']]);
//    Route::post('configuracionesUpdate', 'ConfiguracionController@update')->name('configuraciones.show');
    Route::get('personalAll', 'ConfiguracionController@personalAll')->name('personalAll.show');
    Route::post('configuracionUpdate', 'ConfiguracionController@configuracionUpdate')->name('configuracionUpdate.update');


    Route::get('getdataprueba',function (){return \Illuminate\Support\Facades\DB::SELECT(\Illuminate\Support\Facades\DB::RAW('select year(created_at) as ye from users'));})->name('getdataprueba');
    Route::get('/pruebajson','RolController@pruebaUser')->name('pruebajson.show');

    Route::get('images/{filename?}','ConfiguracionController@perfilImagenAll')->name('images.show');
    Route::get('colorAll','ConfiguracionController@colorAll')->name('colorAll.show');
    Route::post('configureColor','ConfiguracionController@configureColor')->name('configureColor.update');

// ROUTES CARRERAS
    Route::resource('carrera','CarreraController');
    Route::get('carreraDatatablesAll','CarreraController@carreraDatatablesAll')->name('carreraDatatablesAll.show');
    Route::get('carreraModalDatatablesAll','CarreraController@carreraModalDatatablesAll')->name('carreraModalDatatablesAll.show');
    Route::post('carreraAsignacion','CarreraController@carreraAsignacion')->name('carreraAsignacion.store');
    Route::resource('mension','MensionController');
    Route::get('mensionDatatablesAll','MensionController@mensionDatatablesAll')->name('mensionDatatablesAll.show');
    Route::resource('nivel','NivelController');
    Route::get('nivelDatatablesAll','NivelController@nivelDatatablesAll')->name('nivelDatatablesAll.show');
    Route::resource('semestre','SemestreController');
    Route::get('semestreDatatablesAll','SemestreController@semestreDatatablesAll')->name('semestreDatatablesAll.show');
    Route::get('semestreCarreraAsignacionDatatablesAll','SemestreController@semestreCarreraAsignacionDatatablesAll')->name('semestreCarreraAsignacionDatatablesAll.show');
});












