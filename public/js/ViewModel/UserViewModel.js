function User(){
	
	var self 		= this;
	
	self.email 		= ko.observable('');	
	self.username 	= ko.observable('');
	self.email.focused 		= ko.observable();
	self.username.focused	= ko.observable();
	
}

function UserViewModel(){
	
	var self = this;
	
	self.validateAvailableEmail = function(user){
	
		$.ajax({
			url  : 'signup/username',
			type : 'POST',
			data : {'email':email()},
			success : function(id){
				console.log('Id obtenido: ' + id);
			}
			 
		});		
	};
	
}
