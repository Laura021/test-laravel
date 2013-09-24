<?php

use LaravelBook\Ardent\Ardent;

class Category extends Ardent
{
	//Overrride custom table name
	protected $table = 'category';
		
	//Set the data acccess property for the fields
	protected $fillable = array('name','points','color_category_id');
		
	public function ColorCategory()
	{
		return $this->belongsTo('ColorCategory');
	}
	
	public function facts()
	{
		return $this->hasMany('Facts');
	}
	
	// Set validation rules	
	public static $rules = array(
		'name'=>'required|min:3',
		'points' => 'required',
		'color_category_id' => 'required'
	);
	
}

?>