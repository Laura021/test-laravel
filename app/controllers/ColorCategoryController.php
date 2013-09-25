<?php

class ColorCategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	protected $color;
	
	public function __construct()
	{
	  $this->color = new ColorCategory;
	}
		 
	 
	public function index()
	{
		$tpl = new stdClass;
		
		$tpl->colors =  $this->color->all();
		
		return View::make('entities.color.index',(array)$tpl);
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tpl = new stdClass;
		
		$tpl->color = $this->color;
				
		return View::make('entities.color.create',(array)$tpl);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		
		$result = $this->color->create($input);
		
		return Redirect::route('color.index');	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		//print_r(Input::all());
		
		if(Input::has('id'))
		{
			$id = Request::get('id');
		
			$object =  ColorCategory::find($id);
			
			if($object)
			{
				$tpl = new stdClass;
				$tpl->color = $object;
				
				return View::make('entities.color.show',(array)$tpl);
			}else
			{
				$message = array('message' =>'Object not found');
				return Response::json($message);
			}
		}
		else
		{
			$message = array('message' =>'Missing parameters');
			return Response::json($message);
		}	
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}