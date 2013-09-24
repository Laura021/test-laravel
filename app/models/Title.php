<?php

use LaravelBook\Ardent\Ardent;

class Title extends Ardent
{
	//Not need to overide database name
	
	
	//Set access level to the attribures
	protected $fillable = array('title','description','points','award_picture_url');
	
	//Set relationships a.k.a foreign keys -no
	
	// Set rules
	public static $rules = array
	(
		'title' =>'required|min:3',
		'description' => 'required',
		'points' => 'numeric',
		'award_picture_url' => 'required'
	);
}

?>