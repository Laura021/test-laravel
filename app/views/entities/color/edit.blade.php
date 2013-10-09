@extends('layout.master')
	
	@section('body')
	<div class="main-container">
	 
	 <h3>Edit template for ColorCategory model</h3>
		 
	 {{ Form::model($color,array('route' => array('color.update',$color->id),'method' => 'put','class' => 'form-horizontal','role'=>'form')) }}
			
		  {{ Form::hidden('id',$color->id) }}
     		  <div class="form-group">
			   <div class="col-lg-6">{{ Form::label('title', 'Color category name', array('id'=> 'title', 'class'=> 'control-label'))    }}</div>
			   <div class="col-lg-6">{{ Form::text('title',null, array('class' => 'form-control')) }}</div>
 		  </div>
   
		  <div class="form-group">
			   <div class="col-lg-6">{{ Form::label('description', 'Color description', array('id'=> 'description', 'class'=> 'control-label')) }}</div>
			   <div class="col-lg-6">{{ Form::text('description',null, array('class' => 'form-control')) }}</div>
		  </div>
		  
		  <div class="form-group">
			   <div class="col-lg-offset-6 col-lg-6"><button type="submit" class="btn btn-info">Update</button></div>
		  </div>
	 {{ Form::close() }}		
	@stop