@extends('layout.master')
	
	@section('body')
	 <div class="main-container"> 
	      <div class="row">
	      	<ul>
	      		@foreach ($colors as &$c)
	      			<li><a href="/color/{{ $c->id}}">{{ $c->title;}}</a></li>
	      		@endforeach
	      	</ul>
	      </div>	
	      <hr>	
	@stop