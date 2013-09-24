<?php

use LaravelBook\Ardent\Ardent;

class ColorCategory extends Ardent
{
	//Overrride custom table name
	protected $table = 'color_category';
	
		
	//Set the data acccess property for the fields
	protected $fillable = array('title','description');

	//Set inverse relationship
	
	public function category()
	{
		//return $this->belongsTo('Category');
		return $this->hasMany('Category');
	}
	
	// Set rules.
		
	public static $rules = array(
		'title'=>'required|min:3',
		'description' => 'required|min:3'
	);
	
}

?>