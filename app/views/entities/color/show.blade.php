@extends('layout.master')
	
	@section('body')
	 <div class="container">
	      <!-- Example row of columns -->
	      <div class="row">
	      	<h2>Color description</h2>
	      </div>
	     
	     <div class="row pull-right">
	     	<a href="/color" class="btn btn-info">List</a>
	     	<a href="/color/{{ $color->id }}/edit" class="btn btn-warning">Edit</a>	     	
	     	{{ Form::open(array('method' => 'delete', 'action' => array('ColorCategoryController@destroy', $color->id))) }}
	     		{{ Form::hidden('id',$color->id) }}
    			<button class="btn btn-danger" style="display: inline-block;"  type="submit">Delete</button>
			{{ Form::close() }}
	     </div>
	     
	      <div class="row">
			<h3>{{$color->title}}</h3>
			<h4>{{$color->description}}</h4>
	      </div>
	
	      <hr>
	
	
	@stop