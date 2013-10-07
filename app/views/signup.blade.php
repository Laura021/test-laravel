@extends('layout.master')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript' src='/js/vendor/knockout-2.3.0.js'></script>
<script type='text/javascript' src='/js/ViewModel/UserViewModel.js'></script>

	@section('body')
    <div class="popup-content dashed-content" id="signup-content">			         	
		<h3>Get started!</h3>
		 	{{ Form::open(array('url' => 'signup','id' => 'signup-form','class' => 'form-horizontal','role'=>'form')) }}
		     	{{ Form::text('username',null,array('placeholder'=>'username', 'style' => 'margin-top: 15px;', 'data-bind' =>'value: username'))  }}<br /><br />	
				{{ Form::text('email',null,array('placeholder'=>'email','data-bind' =>'value: email'))  }}<br /><br />
				{{ Form::password('password',array('placeholder'=>'password', 'data-bind' =>'value: password')) }}<br /><br />
			 	{{ Form::submit('Login',array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}	
	</div>			
	@stop
	
<script type="text/javascript">
		
	$(document).ready(function(){		
		//var vm = new UserViewModel();		
		
		ko.applyBindings(new UserViewModel());
	});
		
</script>