@if(Session::has('flash_notice'))
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  <strong>Warning!</strong> {{ Session::get('flash_notice')}}
	</div>
@endif