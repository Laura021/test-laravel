<?php

use LaravelBook\Ardent\Ardent;

class Color_Category extends Ardernt
{
	//Overrride custom table name
	protected $table = 'color_category';
	
		
	//Set the data acccess property for the fields
	protected $fillable = array('title','description');

	//Set inverse relationship
	public function category()
	{
		return $this->hasMany('Category');
	}
	
	// Set rules.	
	public static $rules = array(
		'title'=>'required|alpha|min:3',
		'description' => 'alpha'
	);
	
}

?>