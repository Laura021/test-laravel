@extends('layout.master')
	
	@section('body')
	<div class="container">
		 <h3>Edit template for Category model</h3>

		 {{ Form::model($category,array('route' => array('category.update',$category->id),'method' => 'put','class' => 'form-horizontal','role'=>'form')) }}
			
			{{ Form::hidden('id',$category->id) }}
     		<div class="form-group">
			{{ Form::label('name', 'Category name', array('id'=> 'title', 'class'=> 'col-lg-2 control-label'))    }}
			  	<div class="col-lg-8">
     				{{ Form::text('name',null, array('class' => 'form-control')) }}
     			</div>
 			</div>
   					
			<div class="form-group">
     		{{ Form::label('points', 'Points', array('id'=> 'points', 'class'=> 'col-lg-2 control-label')) }}
	     		<div class="col-lg-8">
			 	{{ Form::text('points',null, array('class' => 'form-control')) }}
			 	</div>
			</div>
			
			<div class="form-group">
     		{{ Form::label('color_category_id', 'Color', array('id'=> 'color_category_id', 'class'=> 'col-lg-2 control-label')) }}
	     		<div class="col-lg-8">
				{{	Form::select('color_category_id', $color_category, $category->color_category_id ,array('class'=> 'col-lg-2 control-label')) }}
			 	</div>
			</div>
			
			<div class="form-group">
			    <div class="col-lg-offset-2 col-lg-10">
			    <button type="submit" class="btn btn-info">Update</button>
    		</div>
		 {{ Form::close() }}		
		  <hr>
	@stop