<?php

class UserTableSeeder extends Seeder{
	
	public function run(){
		
	User::create(
		array( 'username' => 'admin1', 
					'password' =>Hash::make('password'),
					'email' => 'admin@domain.com'
			));
		
	}
	
}
?>