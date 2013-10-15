@extends('layout.master')
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type='text/javascript' src='/js/vendor/knockout-2.3.0.js'></script>
	<script type='text/javascript' src='/js/ViewModel/PasswordViewModel.js'></script>
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
		{{ Form::model($user,array('route' => array('user.update',Auth::user()->id),'method' => 'put','class' => 'form-horizontal','role'=>'form')) }}			
		  {{ Form::hidden('id',Auth::user()->id) }}
			<form class="form-horizontal" action="profile" method="PUT" role="form">
				<div class="form-group">
				  <div class="col-lg-3"><label class="control-label">Username</label></div>
				  <div class="col-lg-7"><p class="form-control-static">{{ Auth::user()->username }}</p></div>
				</div>
				<div class="form-group">
				  <div class="col-lg-3"><label class="control-label">Email</label></div>
				  <div class="col-lg-7"><p class="form-control-static"> <span data-bind="value: email">{{ Auth::user()->email }}</span></p></div>
				</div>
				@if(Auth::user()->is_super_user)
				<div class="form-group">
				  <div class="col-lg-3"><label class="control-label">Super user</label></div>
				  <div class="col-lg-7"><p class="form-control-static">YES</p></div>
				</div>				
				@endif
				<div class="form-group">
					<div class="col-lg-3"><label class="control-label">Title:</label></div>
					<div class="col-lg-7"><input id="title" name="title" type="text" value="{{ Auth::user()->title }}" disabled /></div>
				</div>
				<div class="form-group">
					<div class="col-lg-3"><label class="control-label">Bio:</label></div>
					<div class="col-lg-7"><input id ="bio" name="bio" type="text" value="{{ Auth::user()->bio }}" /></div>
				</div>

				<b><a id="setNewPassword">New password</a></b>
				
				<div id='password-container'> 
					<div class="form-group">
						<div class="col-lg-6"><label class="control-label">Actual Password: </label></div>
						<div class="col-lg-5"><input id="actual_password" name="actualpassword"  type="password"  data-bind="value: actual_pass"  /></div>
						<div class="col-lg-1">
							<img   id="email-integrity-yes" style="width: 20px;" src="/images/yes.png" />
							<img   id="email-integrity-no"  style="width: 20px;" src="/images/no.png" />
						</div>
						
					</div>
					<div class="form-group">
						<div class="col-lg-6"><label class="control-label">New Password: </label></div>
						<div class="col-lg-4"><input id="new_pass" name="newpass" type="password"  data-bind="value: new_pass"  /></div>
					</div>
						
					<div class="form-group">
						<div class="col-lg-6"><label class="control-label">Confirm new password: </label></div>
						<div class="col-lg-5"><input id="new_pass_2" name="newpass2" type="password"   data-bind="value: new_pass_2" /></div>
						<div class="col-lg-1">
							<img   id="pass-integrity-yes" style="width: 20px;" src="/images/yes.png" />
							<img   id="pass-integrity-no"  style="width: 20px;" src="/images/no.png" />
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-lg-6"></div>
					<div class="col-lg-4"><input id="btnSubmit"class="btn btn-info" type="submit" value="Edit"/></div>
				</div>	
				
				
			</form>
		</div>	
	</div>
	@stop
	
<script type="text/javascript">
	
	$(document).ready(function(){
		var mail = '<?php echo Auth::user()->email ?>';
		var vm   = new PasswordViewModel();		

		ko.applyBindings(vm);
		vm.setEmail(mail);
		
		$("#password-container").hide();
		$("#pass-integrity-yes").hide();
		$("#pass-integrity-no").hide();
		$("#email-integrity-yes").hide();
		$("#email-integrity-no").hide();

		$("#setNewPassword").click(function(){
			$("#password-container").toggle();
		});
			
	});	
</script>