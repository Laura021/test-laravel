@extends('layout.master')
	
	@section('body')
	 <div class="container">
	      <!-- Example row of columns -->
	      <div class="row">
	      	<h2>Category description</h2>
	      </div>
	       
	     <div class="row pull-right">
	     	<a href="/category" class="btn btn-info">List</a>
	       	<a href="/category/{{ $category->id }}/edit" class="btn btn-warning">Edit</a>	 
			{{ Form::open(array('method' => 'delete', 'action' => array('CategoryController@destroy', $category->id))) }}
	     		{{ Form::hidden('id',$category->id) }}
    			<button class="btn btn-danger" style="display: inline-block;"  type="submit">Delete</button>
			{{ Form::close() }}
	     </div>
	     
	      <div class="row">
			<h3>{{$category->name}}</h3>
			<h5>{{$category->points}}</h5>
			<h5>{{$category->color_category->title }}</h5>
	      </div>
	
	      <hr>
	
	
	@stop