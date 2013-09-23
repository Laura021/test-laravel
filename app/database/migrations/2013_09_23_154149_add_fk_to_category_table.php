<?php

use Illuminate\Database\Migrations\Migration;

class AddFkToCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('category', function($t)
		{
			$t->foreign( 'color_category_id' )->references( 'id' )->on( 'color_category' );
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('category', function($t)
		{
			$t->dropForeign('category_color_category_id_foreign');
		});
	}

}