<?php

use LaravelBook\Ardent\Ardent;

class Fact extends Ardent
{
	// It supposed to take the correct db name: facts
	
	// Set access level for attributes
	protected $fillable = array('title','description','source_name','source_url','image_url','category id','user_id');
	
	
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
		'title' =>'required|min:3',
		'description' => 'required|min:10',
		'source_name' => 'required|min:3',
		'source_url'  => 'url',
		'category_id' => 'required',
		'user_id'	  => 'required'
	);
	
	
	
}

?>