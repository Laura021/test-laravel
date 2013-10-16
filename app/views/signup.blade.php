@extends('layout.master')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript' src='/js/vendor/knockout-2.3.0.js'></script>
<script type='text/javascript' src='/js/ViewModel/EmailViewModel.js'></script>

	@section('body')
	 	@include('layout.alert')
    <div class="popup-content dashed-content" id="signup-content">			         	
		<h3>Get started!</h3>
		 	{{ Form::open(array('url' => 'signup','id' => 'signup-form','class' => 'form-horizontal','role'=>'form')) }}
		 	<div class="form-group">
				<div class="col-lg-7">{{ Form::text('username',null,array('placeholder'=>'username','data-bind' =>'value: $data.username'))  }}</div>
				<div class="col-lg-1">
					<img   id="usernameyes" style="width: 20px;" src="/images/yes.png" />
					<img   id="usernameno" style="width: 20px;" src="/images/no.png" />
				</div>
 			</div>
 			<div class="form-group">
				<div class="col-lg-7">{{ Form::text('email',null,array('placeholder'=>'email','data-bind' =>'value: $data.email'))  }}</div>
				<div class="col-lg-1">
					<img id="emailyes" style="width: 20px;" src="/images/yes.png" />
					<img id="emailno"  style="width: 20px;" src="/images/no.png"  />
				</div>
 			</div>
 			<div class="form-group">
				<div class="col-lg-7">{{ Form::password('password',array('placeholder'=>'password')) }}</div>
 			</div>
 			 <div class="form-group">
				<div class="col-lg-7">{{ Form::submit('Login',array('class' => 'btn btn-primary', 'id' => 'btnLogin','data-bind'=> 'enable: isValid()')) }}</div>
 			</div>		
 			
 			
 				 	
			{{ Form::close() }}	
	</div>	
	<script type="text/javascript">
	$(document).ready(function(){
			
			var vam   = new EmailViewModel();	   			
			ko.applyBindings(vam);	
			
			$("#emailyes").hide();
			$("#emailno").hide();
			
			$("#usernameyes").hide();
			$("#usernameno").hide();
	});
	
    </script>		
	@stop
