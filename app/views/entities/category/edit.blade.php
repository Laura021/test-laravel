@extends('layout.master')
	
	 @section('body')
	 <div class="main-container">
	 
	 <h3>Edit template for Category model</h3>

	  {{ Form::model($category,array('route' => array('category.update',$category->id),'method' => 'put','class' => 'form-horizontal','role'=>'form')) }}			
		  {{ Form::hidden('id',$category->id) }}
		  <div class="form-group">
			   <div class="col-lg-4">{{ Form::label('name', 'Category name', array('id'=> 'title', 'class'=> 'control-label'))    }}</div>
			   <div class="col-lg-8">{{ Form::text('name',null, array('class' => 'form-control')) }}</div>
 		  </div>
   					
		  <div class="form-group">
			   <div class="col-lg-4">{{ Form::label('points', 'Points', array('id'=> 'points', 'class'=> 'control-label')) }}</div>
			   <div class="col-lg-8">{{ Form::text('points',null, array('class' => 'form-control')) }}</div>
		  </div>
			
		  <div class="form-group">
			   <div class="col-lg-4">{{ Form::label('color_category_id', 'Color', array('id'=> 'color_category_id', 'class'=> 'control-label')) }}</div>
			   <div class="col-lg-8">{{ Form::select('color_category_id', $color_category, $category->color_category_id ,array('class'=> 'control-label')) }}</div>
		  </div>
			
		  <div class="form-group">
			    <div class="col-lg-offset-4 col-lg-10"><button type="submit" class="btn btn-info">Update</button></div>
		  </div>
		 
	  {{ Form::close() }}			
	@stop