@extends('layout.master')
<script type='text/javascript' src='/js/vendor/knockout-2.3.0.js'></script>
@section('body')

	<div id="productView">
		<p>
			<b>SKU:</b><span data-bind="text: sku" ></span> <input type="text" data-bind="value: sku"/>
		</p>
		<p>
			<b>Description:</b><span data-bind="text: description"></span><input type="text" data-bind="value: description"/>
		</p>
		<p>
			<b>Cost:</b><span data-bind="text: cost" ></span><input type="text" data-bind="value: cost"/>
		</p>
		<p>
			<b>Price</b><span data-binf="text: price"></span><input type="text" data-bind="value: price"/>
		</p>
		
		<div id="buttonCOntainers">
			<button type="button" data-bind="click: addNewProduct, visible:(selectedProduct() ? false: true )"	>Add	</button>
			<button type="button" data-bind="click: removeProduct, visible:(selectedProduct() ? false: true )"	>Remove	</button>
			<button type="button" data-bind="click: doneProduct,   visible:(selectedProduct() ? false: true )"	>Done	</button>
		</div>
	</div>

@stop
