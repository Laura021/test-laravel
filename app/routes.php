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

Route::get('/',array('as' => 'home', function(){
	return View::make('layout.index');
}));


Event::listen('404', function()
{
    return Response::error('404');
});

Route::resource('/photo', 'PhotoController');

Route::resource('/fact', 'FactController');

/***** Grant access only to admin users *****/

Route::group(array('before'=> 'admin'), function(){
		
	Route::resource('/category', 'CategoryController');
	
	Route::resource('/color', 'ColorCategoryController');
});


/*** Login ***/
Route::get('/login', array('as' => 'login', function(){
	return View::make('login');
}))->before('guest');


Route::post('login',array('uses' => 'AuthController@login'));

Route::get('logout',  array('as' => 'logout', function(){
	Auth::logout();	
	return Redirect::route('home')->with('flash_notice','You are successfully logged out.');	
}))->before('auth');


/*** SignUp ***/

Route::get('/signup', array('as' => 'signup', function(){
	return View::make('signup');
}));

Route::post('signup',array('uses' => 'AuthController@signup'));

Route::post('signup/email',array('uses' => 'AuthController@validateEmail'));

Route::post('signup/username',array('uses' => 'AuthController@validateUsername'));

/*** Profile ***/
Route::get('profile', array('uses' => 'UserController@profile'))->before('auth');

/***  Test logic ****/
Route::get('/testo', function(){
	return View::make('test.test2');
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
	$title 				= new Title;
	$title->title 		= 'Dr.Goku';
	$title->description = 'What dr Goku is capable of';
	$title->points 		= 50;	
	
	var_dump($title->save());
	var_dump($title->errors()->all());
	echo "</br></br>";
	
	echo "Fact";
	//array('title','description','source_name','source_url','image_url','category id');
	$fact = new Fact;
	$fact->title 		= 'Firts fact to upload';
	$fact->description 	= 'Chalalalalala alalal  lalaa';
	$fact->source_name	= 'Perez Hilton';
	$fact->source_url	= 'http://www.juanjaua.com';
	$fact->image_url	= 'juajuajua';
	$fact->category_id	= 1;
	$fact->user_id		= 1;
	
	var_dump($fact->save());
	var_dump($fact->errors()->all());
	echo "</br></br>";
	
	
});
