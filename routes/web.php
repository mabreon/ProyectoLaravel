<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/usuarios', 'UserController@index')
    ->name('users.index')->middleware('auth');;

Route::get('/usuarios/{user}', 'UserController@show')
    ->where('user', '[0-9]+')
    ->name('users.show')->middleware('auth');;

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create')->middleware('auth');;

Route::post('/usuarios', 'UserController@store')->middleware('auth');;

Route::get('/usuarios/{user}/editar', 'UserController@edit')->name('users.edit')->middleware('auth');;

Route::put('/usuarios/{user}', 'UserController@update')->middleware('auth');;

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');

Route::delete('/usuarios/{user}', 'UserController@destroy')->name('users.destroy')->middleware('auth');;
Auth::routes();
 
Route::get('/home', 'HomeController@index')->name('home');
