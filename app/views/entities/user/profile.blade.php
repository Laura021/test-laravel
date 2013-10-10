@extends('layout.master')
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	@section('body')	 	
	
	<div class="main-container">
	<div id='profile-title' class="row"></div>
	
	<div class="row">
		<div class='col-md-3' id='profile-picture'>
			<img class="img-circle"  src="http://lorempixel.com/g/150/150/people/"/>			
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
		</div><br />
		
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
				@if(Auth::user()->is_super_user)
				<div class="form-group">
				  <div class="col-lg-3"><label class="control-label">Super user</label></div>
				  <div class="col-lg-7"><p class="form-control-static">YES</p></div>
				</div>				
				@endif
				<div class="form-group">
					<div class="col-lg-3"><label class="control-label">Bio:</label></div>
					<div class="col-lg-7"><input type="text" value="{{ Auth::user()->bio }}"  disabled/></div>
				</div>
				<div class="form-group">
					<div class="col-lg-3"><label class="control-label">Title:</label></div>
					<div class="col-lg-7"><input type="text" value="{{ Auth::user()->title }}" disabled /></div>
				</div>
				<b><a id="setNewPassword">New password</a></b>
				
				<div id='password-container'> 
					<div class="form-group">
						<div class="col-lg-6"><label class="control-label">Actual Password: </label></div>
						<div class="col-lg-4"><input type="text"/></div>
					</div>
					<div class="form-group">
						<div class="col-lg-6"><label class="control-label">New Password: </label></div>
						<div class="col-lg-4"><input type="text"/></div>
					</div>
					<div class="form-group">
						<div class="col-lg-6"><label class="control-label">Confirm new password: </label></div>
						<div class="col-lg-4"><input type="text"/></div>
					</div>
					<div class="form-group">
						<div class="col-lg-6"></div>
						<div class="col-lg-4"><input class="btn btn-info" type="submit" value="Edit"/></div>
					</div>
				</div>
				
			</form>
		</div>	
	</div>
	@stop
	
<script type="text/javascript">
	
	$(document).ready(function(){
		$("#password-container").hide();

		$("#setNewPassword").click(function(){
			$("#password-container").toggle();
		});
	});
	
</script>