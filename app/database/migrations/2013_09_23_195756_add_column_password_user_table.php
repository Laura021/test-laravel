<?php

use Illuminate\Database\Migrations\Migration;

class AddColumnPasswordUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($t)
		{
			$t->string('password');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users',function($t)
		{
			$table->dropColumn('password');
		});
		
	}

}