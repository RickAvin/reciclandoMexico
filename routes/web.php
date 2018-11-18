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

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    //Rutas de Empresa
    Route::resource('empresa','EmpresasController');
    Route::get('empresas/{id}/destroy',[
            'uses'=>'EmpresasController@destroy',
            'as' =>'empresa.destroy'
    ]);

    //Rutas de Tecnico
    Route::resource('tecnico','TecnicosController');
    Route::get('tecnicos/{id}/destroy',[
            'uses'=>'TecnicosController@destroy',
            'as' =>'tecnico.destroy'
    ]);
    
    //Rutas de Maquina
    Route::resource('maquina','MaquinasController');
    Route::get('maquinas/{id}/destroy',[
            'uses'=>'MaquinasController@destroy',
            'as' =>'maquina.destroy'
    ]);
    Route::resource('pieza','PiezasController');
    Route::get('piezas/{id}/destroy',[
            'uses'=>'PiezasController@destroy',
            'as' =>'pieza.destroy'
    ]);

    //Rutas de Mantenimiento
    Route::resource('mantenimiento','MantenimientosController');
    Route::get('mantenimientos/{id}/destroy',[
            'uses'=>'MantenimientosController@destroy',
            'as' =>'mantenimiento.destroy'
    ]);

    //Rutas de Citas
    Route::resource('cita','CitasController');
    Route::get('citas/{id}/destroy',[
            'uses'=>'CitasController@destroy',
            'as' =>'cita.destroy'
    ]);

    //Rutas de Reparacion
    Route::resource('reparacion','ReparacionesController');
    Route::get('reparaciones/{id}/destroy',[
            'uses'=>'ReparacionesController@destroy',
            'as' =>'reparacion.destroy'
    ]);
});
    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
