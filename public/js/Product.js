function Product(){
		var self = this;
		
		self.sku 			= ko.observable('');
		self.description 	= ko.observable('');
		self.price 			= ko.observable(0.0);
		self.cost			= ko.observable(0.0);
		self.quantity		= ko.observable(0);
		
		self.skuAndDescription = ko.computed(function () {
			var sku 		= self.sku() || "";
			var description = self.description() || "";
			
			return sku + ": " + description;
		});	
	};
	
