<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tpl = new stdClass;
		
		$tpl->category = $this->category;
		$tpl->color_category =  DB::table('color_category')->lists('title', 'id');
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		//Fix this.
		
		$input 	= Input::all();
	
		if($input['actualpassword'] == '')
		{	
			unset($input['actualpassword']);
			unset($input['newpass']);
			unset($input['newpass2']);
			
		}else
		{
			$input['password'] = Hash::make($input['newpass']);
			
			unset($input['actualpassword']);
			unset($input['newpass']);
			unset($input['newpass2']);
		}
		
		unset($input['_token']);
		unset($input['_method']);
		
		DB::table('users')
            ->where('id', $input['id'])
            ->update($input);
	
		return Redirect::route('home')->with('flash_notice','Profile updated');	
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
	
	public function profile()
	{
		$tpl = new stdClass;
		$tpl->user = Auth::user();
		
		$tpl->user = new User;
		return View::make('entities.user.profile',(array)$tpl);
	}
}