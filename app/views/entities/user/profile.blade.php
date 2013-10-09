@extends('layout.master')
	@section('body')	 	
	
	<div class="main-container">
	<div id='profile-title' class="row"></div>
	
	<div class="row">
		<div class='col-md-2 col-md-offset-1' id='profile-picture'>
			<img class="img-circle"  src="http://lorempixel.com/g/150/150/people/"/>
		</div>
		<div class='col-md-7'  id='profile-data'>		
			<form class="form-horizontal" role="form">
				<div class="form-group">
				  <div class="col-lg-3"><label class="control-label">Username</label></div>
				  <div class="col-lg-7"><p class="form-control-static">{{ Auth::user()->username }}</p></div>
				</div>
				<div class="form-group">
				  <div class="col-lg-3"><label class="control-label">Email</label></div>
				  <div class="col-lg-7"><p class="form-control-static">{{ Auth::user()->email }}</p></div>
				</div>
			</form>
		</div>	
	</div>
	<div class="row"></div>	
	<div class="row">
		<div class='col-md-2 col-md-offset-1' id='profile-picture'>
			<div class="panel panel-info">
				<div class="panel-heading"> <h4 class="panel-title"></h4></div>
				<div class="panel-body">
					<img src="/images/star.png" />
					<img src="/images/star.png" />
					<img src="/images/star.png" />
					<img src="/images/star.png" />
					<img src="/images/star.png" />
					<img src="/images/star.png" />
					<img src="/images/star.png" />
				</div>	
			</div>
		</div>
		<div class='col-md-7'  id='profile-data'>
			<div class="row content editable" id="content">			         	
				<h3>Edit info</h3>
				<b>Bio:</b><i>{{ Auth::user()->bio }}</i><br /><br />
				<b>Title:</b><i>{{ Auth::user()->title }}</i><br /><br />
				<b><a>New password</a></b>			
			</div>			
		</div>
	</div>
		
		

	
	@stop