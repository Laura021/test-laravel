@extends('layout.master')
<script type='text/javascript' src='/js/vendor/knockout-2.3.0.js'></script>
@section('body')
<h1>HOLAAAAAAA</h1>


<form>
	<label>Name:</label>		<input data-bind="value: nameValue" 					placeholder="Write in here your name." /><br />
	<label>Last name:</label>	<input data-bind="value: lastNameValue" type="text" 	placeholder="Write here your last name" /><br />
	<label>Age:</label>			<input data-bind="value: ageValue" 		type="text"  	placeholder="99" />
</form>

Hello,<span data-bind="text: fillData"></span>

<script>	
	var dataModel = function(){
	
		this.nameValue = ko.observable("Laura"),
		this.lastNameValue = ko.observable("Trejo"),
		this.ageValue = 15,		
		this.fillData  = ko.computed(function(){
			return this.nameValue() + " " + this.lastNameValue();
		},this);
	};
	
	ko.applyBindings(new dataModel());
</script>
@stop

