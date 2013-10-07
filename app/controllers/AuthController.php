<?php

class AuthController extends \BaseController 
{
	public function login()
	{			
		$user = array(  'email' => Input::get('email'),
						'password' => Input::get('password'));
						
		if(Auth::attempt($user)){
			return Redirect::route('home');
		}else{
			return Redirect::route('home')->with('flash_notice','An error has occurred, please try again.');;
		}
	}
	
	public function signup()
	{
		//All data is validated.
			
		$user = array(  'email' => Input::get('email'),
						'password' => Input::get('password'),
						'username' => Input::get('username'));
							
		print_r($user);
		
	}
	
	public function validateEmail()
	{
		//Validate user's email in real time
		$form_email = Input::get('email');
		
		$email_exists = User::where('email', '=', $form_email)->take(1)->get();
		
		var_dump($email_exists);
		
		return -1;
		
	}
	
	public function validateUsername()
	{
		//Validate userame in real time.
		
		
	}
	
}

?>