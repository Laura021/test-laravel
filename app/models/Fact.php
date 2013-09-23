<?php

use LaravelBook\Ardent\Ardent;

class Fact extends Ardernt
{
	// It supposed to take the correct db name: facts
	
	// Set access level for attributes
	protected $fillable = array('title','description','source_name','source_url','image_url','category id');
	
	
	//Set relationshps a.k.a foreign keys
	public function category()
	{
		return $this->hasOne('Category');
	}
	
	public function users()
	{
		return $this->hasOne('User');
	}
	
	//Set rules
	public static $rules = array
	(
		'title' =>'required|alpha_num|min:3',
		'description' => 'required|alpha_dash|min:10',
		'source_name' => 'required|alpha_dash|min:3',
		'source_url' => 'url'	
	);
	
	
	
}

?>