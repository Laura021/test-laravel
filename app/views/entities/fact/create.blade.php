@extends('layout.master')
	
	@section('body')
	<div class="main-container">
		 <h3>Create template for fact model</h3>
		 
		 {{ Form::model($fact,array('route' => 'fact.store','class' => 'form-horizontal','role'=>'form')) }}
			
     		<div class="form-group">
				<div class="col-lg-4">{{ Form::label('title', 'Title', array('id'=> 'title', 'class'=> 'control-label')) }}</div>
				<div class="col-lg-8">{{ Form::text('tile',null, array('class' => 'form-control')) }}</div>
 			</div>
   
			<div class="form-group">
     			<div class="col-lg-4">{{ Form::label('description', 'Description', array('id'=> 'description', 'class'=> 'control-label')) }}</div>
	     		<div class="col-lg-8">{{ Form::text('description',null, array('class' => 'form-control')) }}</div>
			</div>
			
			<div class="form-group">
     			<div class="col-lg-4">{{ Form::label('Source', 'Source', array('id'=> 'source_name', 'class'=> 'control-label')) }}</div>
	     		<div class="col-lg-8">{{ Form::text('source_name',null, array('class' => 'form-control')) }}</div>
			</div>

			<div class="form-group">
     			<div class="col-lg-4">{{ Form::label('Source Url', 'Source Url', array('id'=> 'source_url', 'class'=> 'control-label')) }}</div>
	     		<div class="col-lg-8">{{ Form::text('source_url',null, array('class' => 'form-control')) }}</div>
			</div>
			
			<div class="form-group">
     			<div class="col-lg-4">{{ Form::label('Image File', 'Image file', array('id'=> 'image_url', 'class'=> 'control-label')) }}</div>
	     		<div class="col-lg-8">{{ Form::file('image_url',null, array('class' => 'form-control')) }}</div>
			</div>
						
			<div class="form-group">
     			<div class="col-lg-4">{{ Form::label('category_id', 'Category', array('id'=> 'category_id', 'class'=> 'control-label')) }}</div>
	     		<div class="col-lg-8">{{ Form::select('category_id', $category, array('class'=> 'col-lg-2 control-label')) }}</div>
			</div>
						
			<div class="form-group">
			    <div class="col-lg-offset-4 col-lg-8">
			    <button type="submit" class="btn btn-info">Create</button>
    		</div>			
		 {{ Form::close() }}		 	
		  <hr>
	@stop