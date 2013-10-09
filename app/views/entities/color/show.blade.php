@extends('layout.master')
	
	@section('body')
	 <div class="main-container">
	      <!-- Example row of columns -->
	      <div class="row">
	      	<h2>Color description</h2>
	      </div>
	     
	    <div class="row">
	      <div class="col-md-5">
		  <h3>{{$color->title}}</h3>
		  <h4>{{$color->description}}</h4>
	      </div>
	      
	      <div class="col-md-7">
		<div class="col-md-1"><a href="/color" class="btn btn-info">List</a></div>
		<div class="col-md-1"><a href="/color/{{ $color->id }}/edit" class="btn btn-warning">Edit</a>	</div>
		<div class="col-md-1">		     	
		{{ Form::open(array('method' => 'delete', 'action' => array('ColorCategoryController@destroy', $color->id))) }}
		    {{ Form::hidden('id',$color->id) }}
		    <button class="btn btn-danger" style="display: inline-block;"  type="submit">Delete</button>
		{{ Form::close() }}
		</div>
	      </div>
	    
	    </div>
	
	      <hr>
	
	
	@stop