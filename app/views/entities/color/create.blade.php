@extends('layout.master')
	
	@section('body')
	<div class="container">
		 <h3>Create template for ColorCategory model</h3>
		 
		 {{ Form::model($color,array('route' => 'color.store','class' => 'form-horizontal','role'=>'form')) }}
			
     		<div class="form-group">
			{{ Form::label('title', 'Color category name', array('id'=> 'title', 'class'=> 'col-lg-2 control-label'))    }}
			  	<div class="col-lg-8">
     				{{ Form::text('title',null, array('class' => 'form-control')) }}
     			</div>
 			</div>
   
			<div class="form-group">
     		{{ Form::label('description', 'Color description', array('id'=> 'description', 'class'=> 'col-lg-2 control-label')) }}
	     		<div class="col-lg-8">
			 	{{ Form::text('description',null, array('class' => 'form-control')) }}
			 	</div>
			</div>
			<div class="form-group">
			    <div class="col-lg-offset-2 col-lg-10">
			    <button type="submit" class="btn btn-info">Create</button>
    		</div>
			
			
		 {{ Form::close() }}		 	
		  <hr>
	@stop
