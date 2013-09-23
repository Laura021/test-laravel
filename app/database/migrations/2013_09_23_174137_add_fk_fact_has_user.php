<?php

use Illuminate\Database\Migrations\Migration;

class AddFkFactHasUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::table('facts', function($t)
		{
			$t->unsignedInteger('user_id');
			
			$t->foreign( 'user_id' )->references( 'id' )->on( 'users' );
		});
			

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('facts', function($t)
		{
			 $table->dropColumn('user_id');
			 $table->dropForeign('user_id_foreign');
		});
	}

}