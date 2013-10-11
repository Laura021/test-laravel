function PasswordViewModel(){
		
                var self = this;
		
		self.actual_pass    = ko.observable('');
                self.new_pass       = ko.observable('');
                self.new_pass_2     = ko.observable('');
                
                self.new_pass_2.subscribe(function(){
                    console.log('changes on 2nd password text');
                    
                    if (self.new_pass() == self.new_pass_2()) {
                                $("#pass-integrity-no").hide();
                                $("#pass-integrity-yes").show();
                                
                    }else{
                                $("#pass-integrity-yes").hide();
                                $("#pass-integrity-no").show();
                    }
                });
        };