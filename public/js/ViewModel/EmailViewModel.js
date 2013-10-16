function EmailViewModel(){
	//btnLogin
	var self 		= this;
	
	self.username 	= ko.observable();
	self.email	 	= ko.observable();
	self.validUser  = false;
	self.validEmail	= false;
	
	
	self.username.subscribe(function(){
		$.get( 
			"/signup/username", 
			{ username: self.username }, 
			function( data ) {
					if(data == "true"){
						 $("#usernameno").show();
						 $("#usernameyes").hide();
						  self.validUser = false;	
						  self.isValid();					  
					}else{
						$("#usernameno").hide();
						$("#usernameyes").show();
						self.validUser = true;	
						self.isValid();				 
			 		}
		}); 
	});
	
	self.email.subscribe(function(){
		$.get( 
			"/signup/email", 
			{ email: self.email }, 
			function( data ) {
					if(data == "true"){
						 $("#emailno").show();
						 $("#emailyes").hide();
						  self.validEmail = false;
						  self.isValid();
					}else{
						$("#emailno").hide();
						$("#emailyes").show();
						 self.validEmail = true;
						 self.isValid();
			 		}
		}); 
	});
	
	self.isValid = function(){
		console.log('Usuario : ' + self.validUser  );
		console.log('Email   : ' + self.validEmail );
		
		var flag = false;
		
		if(self.validEmail && self.validUser)
			return '';
		else
			return 'disabled';
		  
	};
	
}
