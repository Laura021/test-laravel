<?php

use Illuminate\Database\Migrations\Migration;

class SetEmailToUniqueOnUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($t)
		{
			$t->unique('email','users_email_unique');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($t)
		{
			$t->dropUnique('users_email_unique');
		});
	}

}