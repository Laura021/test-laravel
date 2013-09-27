@extends('layout.master')
	
	@section('body')
	 <div class="container"> 
	      <div class="row">
	      	<ul>
	      		@foreach ($category as &$c)
	      			<li><a href="/category/{{ $c->id}}">{{ $c->name;}}</a></li>
	      		@endforeach
	      	</ul>
	      </div>	
	      <hr>	
	@stop