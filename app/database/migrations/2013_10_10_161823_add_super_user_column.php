<?php

use Illuminate\Database\Migrations\Migration;

class AddSuperUserColumn extends Migration {
	
	public function up()
	{
		Schema::table('users', function($t)
		{
			$t->integer('is_super_user');
			
		});
	}

	public function down()
	{
		Schema::table('users',function($t)
		{
			$table->dropColumn('is_super_user');
		});
	}

}