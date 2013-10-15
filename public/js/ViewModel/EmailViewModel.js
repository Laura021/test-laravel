function EmailViewModel(){
	
	var self = this;
	
	self.username 	= ko.observable();
	self.email	 	= ko.observable();
	
	self.username.subscribe(function(){
		console.log('username changed');
	});
	
	self.email.subscribe(function(){
		console.log('email changed');
	});
	
}
