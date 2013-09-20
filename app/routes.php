<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
	//return 'Hello!';
});

Event::listen('404', function()
{
    return Response::error('404');
});


//Route::controller('photo','PhotoController');
//Route::get('photo','PhotoController@index');
Route::resource('/photo', 'PhotoController');
