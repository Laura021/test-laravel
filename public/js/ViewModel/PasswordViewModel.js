function PasswordViewModel(){
		
                var self = this;
		
				self.actual_pass    = ko.observable('');
                self.new_pass       = ko.observable('');
                self.new_pass_2     = ko.observable('');
                self.email			= ko.observable();
                
                self.new_pass_2.subscribe(function(){
                    console.log('changes on 2nd password text');
                    
                    if (self.new_pass() == self.new_pass_2()) {
                                $("#pass-integrity-no").hide();
                                $("#pass-integrity-yes").show();
                                $('#btnSubmit').prop('disabled', false);
                                
                    }else{
                                $("#pass-integrity-yes").hide();
                                $("#pass-integrity-no").show();
                                $('#btnSubmit').prop('disabled', true);
                    }
                });
                
                self.actual_pass.subscribe(function(){

                	$.get( 
						"/pass", 
						{ email: self.email , password: self.actual_pass() }, 
						function( data ) {
			  				if(data == "true"){
			  					 $("#email-integrity-no").hide();
			  					 $("#email-integrity-yes").show();
			  				}else{
			  					window.location.href = '/logout';				
			  				}
			  			});
                });
                
                self.setEmail = function(value)
                {
                	self.email=value;
                };
        };