<?php

class FactController extends \BaseController {

	protected $fact;
	
	public function __construct()
	{
		$this->fact =  new Fact;
	}
	
	
	public function index()
	{
		//$tpl = new stdClass;
		//$tpl->facts = $this->fact.all();
		//List all the facto in the system	
	}

	public function create()
	{
		$tpl = new stdClass;
		
		$tpl->fact 		= $this->fact;
		$tpl->category 	=  DB::table('category')->lists('name', 'id');

		return View::make('entities.fact.create',(array)$tpl);	
	}

	public function store()
	{
		return Input::all();
	}

	public function show($id)
	{
		//Show a fact with all the info
	}

	public function edit($id)
	{
		//Edit the information
	}

	public function update($id)
	{
		//Save the edition
	}

	public function destroy($id)
	{
		//
	}

}