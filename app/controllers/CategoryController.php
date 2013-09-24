<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//This go and get the rlation info for eachr object, this is the equivalent od call all, and the query the id of the relation
		return Category::with('ColorCategory')->get();	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$category						= new Category;
		$category->name 				= Request::get('name');
		$category->points 				= Request::get('points');
		$category->color_category_id 	= 1;
		
		$category->save();
				
		var_dump($category->save());
		var_dump($category->errors()->all());
		
		/*return Response::json(array(
			'category' =>$category)
		 );*/
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if(Input::has('id'))
		{
			$id = Request::get('id');
		
			return Category::with('ColorCategory')->where('id', '=', $id)->get();			
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
		$id = Request::get('id');
		
		$object = Category::find($id);
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