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
		$userData = array(  'email' 	=> Input::get('email'),
							'password' 	=> Input::get('password'),
							'username' 	=> Input::get('username'),
							'password' 	=> Input::has('password') ? Input::get('password') : null );
							
							
		$user 			= new User;
		$user->username = $userData['username'];
		$user->email	= $userData['email'];
		$user->password = $userData['password'] ? Hash::make($userData['password']) : null;
		
		if(! $user->password ) unset($user->password);
		
		$user->title	= 'Noob';
		$user->bio		= 'Just some word about your life and bla bla';

		$user->save();
		
		$errors = $user->errors()->all();
		
		//Check for errors
		
		if(!empty($errors))
		{
			$errors_text = '';
		
			foreach($errors  as &$e)
			{
				$errors_text .= $e;	
			}
			
			return Redirect::route('signup')->with('flash_notice',$errors_text);
		}
		
		// now the user is created, redirect him/her to the home view but, logged.
		
		$created_user = array('email' => $user->email , 'password' => Input::get('password') );
		
		if(Auth::attempt($created_user))
		{
			return Redirect::route('home');
		}else{
			return Redirect::route('home')->with('flash_notice','An error has occurred, please try again.');;
		}
		
		//var_dump($user->save());
		//var_dump($user->errors()->all());
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