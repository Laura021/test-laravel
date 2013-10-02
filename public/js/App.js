//Define namespace 

window.myApp = {};

(function(myApp){
	
	function App(){		
		this.run = function(){
			var vm = new myApp.ProductsViewModel();		
			console.log(vm);	
			
			ko.applyBindings(vm);
		};
	};
	
	myApp.App = App;	
	
}(window.myApp));
