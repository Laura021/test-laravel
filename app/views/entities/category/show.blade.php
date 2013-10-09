@extends('layout.master')
	
	@section('body')
	 <div class="main-container">
	      <!-- Example row of columns -->
	      <div class="row">
	      	<h2>Category description</h2>
	      </div>
	       
	      <div class="row">
		<div class="col-md-5">
		    <h3>{{$category->name}}</h3>
		    <h5>{{$category->points}}</h5>
		    <h5>{{$category->color_category->title }}</h5>
		</div>
		<div class="col-md-7">
		  <div class="col-md-1"><a href="/category" class="btn btn-info">List</a></div>
		  <div class="col-md-1"><a href="/category/{{ $category->id }}/edit" class="btn btn-warning">Edit</a></div>
		  <div class="col-md-1">	 
			{{ Form::open(array('method' => 'delete', 'action' => array('CategoryController@destroy', $category->id))) }}
	     		{{ Form::hidden('id',$category->id) }}
    			<button class="btn btn-danger" style="display: inline-block;"  type="submit">Delete</button>
			{{ Form::close() }}
		  </div>
		</div>
	      </div>	
	      <hr>
	@stop