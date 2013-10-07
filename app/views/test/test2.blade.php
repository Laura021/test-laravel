@extends('layout.master')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript' src='/js/vendor/knockout-2.3.0.js'></script>
<script type='text/javascript' src='/js/ViewModel/ProductsViewModel.js'></script>
@section('body')
	
	<div id="productListVIew">
		<select id="productList" size ="10" style="min-width: 120px" data-bind="options: productCollection, value: listViewSelectedItem, optionsText: 'skuAndDescription' "></select>	
	</div>
	
	<div id="productView" data-bind="with: selectedProduct" >
		<form>
			<fieldset>
				<legend>Product Details: </legend>
				
				<label>SKU:
					<input type="text" data-bind="value: sku"/>
				</label>
	
				<label>Description:
					<input type="text" data-bind="value: description"/>
				</label>
	
				<label>Cost:
					<input type="text" data-bind="value: cost"/>
				</label>
	
				<label>Price:
					</span><input type="text" data-bind="value: price"/>
				</label>
				
				<label>Quantity:
					<input type="text" data-bind="value: quantity" />
				</label>
			</fieldset>
		</form>
	</div>
	
	<div id="buttonContainers">
		<button type="button" 
				data-bind=" click: addNewProduct, 
							visible:(selectedProduct() ? false: true )"	>Add</button>
							
		<button type="button" 
				data-bind="click: removeProduct, 
				visible:(selectedProduct() ? true: false )"	> Remove </button>
				
		<button type="button" 
				data-bind="click: doneEditingProduct,   
							visible:(selectedProduct() ? true: false )"	>Done</button>
	</div>
		

@stop


<script type="text/javascript">	
	$(document).ready(function(){
		
		var vm = new ProductsViewModel();		

		ko.applyBindings(vm);
	});
		
</script>

