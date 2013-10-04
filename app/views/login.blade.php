@extends('layout.master')
	
	@section('body')
		<h1>L-O-G-I-N</h1>
		
		@if(Session::has('flash_notice'))
			<div id="flash_notice"> {{ Session::get('flash_notice')}} </div>
		@endif
		
		{{ Form::open(array('login', '/login')) }}
		
		<p>
			{{ Form::label('username','Username')}}
			{{ Form::text('username') }}
		</p>
		
		<p>
			{{ Form::label('password','Password')}}
			{{ Form::text('password') }}
		</p>
		
		<p> {{ Form::submit('Login') }}</p>
		{{ Form::close() }}
		
	@stop