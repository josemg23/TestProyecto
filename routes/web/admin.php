<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(function(){

    
    Route::get('/post-online', 'AdminController@index')->name('Post');
    Route::get('/control-permisos', 'AdminController@index3')->name('Control.Permisos');
    Route::get('/actividades-online', 'AdminController@index2')->name('Actividades');
    Route::get('/lista-usuarios', 'AdminController@index4')->name('usuarios');
    Route::get('/mi-perfil', 'AdminController@perfil')->name('admin.perfil.me');

 

});
