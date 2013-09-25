@extends('layout.master')
	
	@section('body')
	 <div class="container">
	      <!-- Example row of columns -->
	      
	      <div class="row">
	      	<ul>
	      		@foreach ($colors as &$c)
	      			<li><a href="/color/show?id={{ $c->id}}">{{ $c->title;}}</a></li>
	      		@endforeach
	      	</ul>

	      </div>
	
	      <hr>
	
	
	@stop