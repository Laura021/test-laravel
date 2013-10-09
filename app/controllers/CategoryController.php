<?php

class CategoryController extends \BaseController {
	
	protected $category; 
	 
	public function __contruct()
	{
		$this->category =  new Category;
	}
	
	
	public function index()
	{
		//This go and get the rlation info for eachr object, this is the equivalent od call all, and the query the id of the relation
		$tpl 		= new stdClass;		
		$tpl->category  = Category::with('ColorCategory')->get();
		$tpl->route 	= $this->getController();
		
		return View::make('entities.category.index', (array)$tpl);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tpl = new stdClass;
		
		$tpl->category 		= $this->category;
		$tpl->color_category 	=  DB::table('color_category')->lists('title', 'id');
		$tpl->route 		= $this->getController();

		return View::make('entities.category.create',(array)$tpl);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		$input = Input::all();

		$input['color_category_id'] = intval($input['color_category_id']);

		$category = new Category;
		
		$category->create($input);
		return Redirect::route('category.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$id = Request::segment(2) ? intval(Request::segment(2)) : 0;
		
		$object = Category::with('ColorCategory')->where('id', '=', $id)->get();	
		
		//return $object;	
		if($object->contains($id))
		{
			$tpl 		= new stdClass;
			$tpl->category 	= $object->first();
			$tpl->route 	= $this->getController();
			
			return View::make('entities.category.show', (array)$tpl);

		}else
		{
			$message = array('message' => 'Object not found');
			return Response::json($message);
		}	
	}

	public function edit($id)
	{
		$id = Request::segment(2) ? intval(Request::segment(2)) : 0;
		$object = Category::find($id);
		
		if ($object)
		{
			$tpl 			= new stdClass;
			$tpl->category 		= $object;
			$tpl->color_category 	=  DB::table('color_category')->lists('title', 'id');
			$tpl->route 		= $this->getController();
							
			return View::make('entities.category.edit',(array)$tpl);
		}
		else
		{
			$message = array('message' =>'Object not found');
			return Response::json($message);
		}
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input  = Input::all();

		$result = Category::find($input['id'])->update($input);		
		
		return Redirect::route('category.index');		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$category = new Category;
		
		$input = Input::all();
		
		$object = $this->category->find($input->id);
		
		$object->delete();
		
		return $object;
		//return Redirect::route('category.index');		
	}
	
	public function getController()
	{
	  return Route::currentRouteName();
	}

}