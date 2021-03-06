<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/feedback', 'FormController@index');
Route::get('/feedback/create', 'FormController@create');
Route::post('/feedback/store', 'FormController@store');
Route::get('/feedback/store', 'MainController@error');
//keep {id} files last
Route::get('/feedback/{id}', 'FormController@show');
Route::get('/feedback/{id}/result','ResultController@show');
/**
*
/portfolio
*
*/
Auth::routes();

Route::get('/profile', 'HomeController@index')->name('home');



//error page
Route::get('/{error}', 'MainController@error');
Route::get('/{error}/{error1}', 'MainController@error');
Route::get('/{error}/{error1}/{error2}', 'MainController@error');