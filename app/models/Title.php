<?php

use LaravelBook\Ardent\Ardent;

class Title extends Ardernt
{
	//Not need to overide database name
	
	
	//Set access level to the attribures
	protected $fillable = array('title','description','points','award_picture_url');
	
	//Set relationships a.k.a foreign keys -no
	
	// Set rules
	public static $rules = array
	(
		'title' =>'required|min:3|alpha_num',
		'description' => 'alpha_num',
		'points' => 'numeric'
	);
}

?>