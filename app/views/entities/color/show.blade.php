@extends('layout.master')
	
	@section('body')
	 <div class="container">
	      <!-- Example row of columns -->
	      <div class="row">
	      	<h2>Color description</h2>
	      </div>
	     
	      <div class="row">
			<h3>{{$color->title}}</h3>
			<h4>{{$color->description}}</h4>
	      </div>
	
	      <hr>
	
	
	@stop