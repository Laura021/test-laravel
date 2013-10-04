@extends('layout.master')
	
	@section('body')
		<h1>Authentication demo</h1>
	
			
		<ul>			
			<li>{{ link_to_route('home','HOME'); }}</li>
			@if(Auth::check())		
			<li>{{ link_to_route('logout','LOGOUT'); }}</li>
			@else	
			<li>{{ link_to_route('login','LOGIN'); }}</li>
			@endif
		</ul>
		
		
		@if(Session::has('flash_notice'))
			<div id="flash_notice"> {{ Session::get('flash_notice')}} </div>
		@endif
	@stop