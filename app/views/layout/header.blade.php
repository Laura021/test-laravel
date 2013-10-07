<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/custom.css">
        @section('head')
	        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
	        <link rel="stylesheet" href="/css/main.css">
	        <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
         @show
         
    </head>
    <body>
    	
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/color">Colors</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <div id="accessForm">          	
          	<ul>
          		<li id="login">        			  			
		          @if(Auth::check())	
			       	<a href="logout"><button class="btn btn-danger">Logout</button></a>
			      @else
			        <a id="login-trigger" class="btn btn-info pull-right dropdown-toggle"  data-toggle="dropdown" href="">Login<span class="caret"></span></a>      
			        <div class="dropdown-menu popup-content dashed-content" id="login-content">			         	
			          	<h3>Welcome back!</h3>
			          	{{ Form::open(array('url' => 'login','id' => 'login-form','class' => 'form-horizontal','role'=>'form')) }}
							{{ Form::text('email',null,array('placeholder'=>'email', 'style' => 'margin-top: 15px;'))  }}<br /><br />
							{{ Form::password('password',array('placeholder'=>'password')) }}<br /><br />
						 	{{ Form::submit('Login',array('class' => 'btn btn-primary')) }}
						{{ Form::close() }}	
						</div>		
				@endif
          			
          		</li>
          		<li id="signup">  
          			<a id="signup-trigger" class="btn btn-info pull-right dropdown-toggle"  data-toggle="dropdown" href="">Sign up<span class="caret"></span></a>          			 
          			 <div class="dropdown-menu popup-content dashed-content" id="signup-content">			         	
			          	<h3>Get started!</h3>
			          	{{ Form::open(array('url' => 'signup','id' => 'signup-form','class' => 'form-horizontal','role'=>'form')) }}
							{{ Form::text('email',null,array('placeholder'=>'email', 'style' => 'margin-top: 15px;'))  }}<br /><br />
							{{ Form::password('password',array('placeholder'=>'password')) }}<br /><br />
						 	{{ Form::submit('Login',array('class' => 'btn btn-primary')) }}
						{{ Form::close() }}	
					</div>	
          			
          		</li>
          	</ul>
          		          
          </div><!--/.access form -->
        </div><!--/.navbar-collapse -->
      </div>
    </div>