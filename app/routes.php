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


Route::get('/testModel', function(){
	//Test users model.
	
	echo "Test user : ";
	$user 			= new User;
	$user->username = 'testUser1';
	$user->email	= 'laura.com';
	$user->title	= 'noob';
	$user->bio		= 'Just some word about your life and bla bla';
	
	//var_dump($user->save());
	//var_dump($user->errors()->all());
	echo "</br></br>";
	
	echo "Color_category: ";
	
	$color_category					= new ColorCategory;
	$color_category->title 			= 'BlueFive';
	$color_category->description	= 'Things realted to the sea';
	
	//var_dump($color_category->save());
	//var_dump($color_category->errors()->all());
	echo "</br></br>";
	
	echo "Category: ";
	$category			= new Category;
	$category->name 	= 'First Category';
	$category->points 	= '10';
	$category->color_category_id = 1;
	
	//lvar_dump($category->save());
	//var_dump($category->errors()->all());
	echo "</br></br>";
	
	echo "Titles";
	
});

Event::listen('404', function()
{
    return Response::error('404');
});

Route::resource('/photo', 'PhotoController');
