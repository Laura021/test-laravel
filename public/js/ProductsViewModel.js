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


	function ProductsViewModel(){
		var self = this;
		
		self.selectedProduct 		= ko.observable();
		self.productCollection 		= ko.observableArray([]);
		self.listViewSelectedItem 	= ko.observable(null);

		
		self.listViewSelectedItem.subscribe(function(product){
			console.log('Hello form suscribe option');
			
			if(product){
				self.selectedProduct(product);
			}
		});

				
		self.addNewProduct = function(){
			var p = new Product();
			self.selectedProduct(p);
			
			console.debug('[New]Status: ' + self.selectedProduct());
		};
		
		self.doneEditingProduct = function(){
			
			console.log('[Done-1]Status: ' + self.selectedProduct());
			var p = self.selectedProduct();
			
			if(!p){
				return;
			}
			
			if(self.productCollection.indexOf(p) > -1){
				return self.selectedProduct(null);
			}
			
			self.productCollection.push(p);

			self.selectedProduct(null);
			console.log('[Done-2]Status: ' + self.selectedProduct());
		};
		
		self.removeProduct = function (){
			
			var p = self.selectedProduct();
			
			if(!p){
				return;
			}
			
			self.selectedProduct(null);
			console.log('[Delete]Status: ' + self.selectedProduct());
			
			return self.productCollection.remove(p);
		};
	};
	
