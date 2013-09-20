<?php

use Illuminate\Database\Migrations\Migration;

class AddFkeCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('category', function($t)
		{
			$t->foreign('color_category_id')->references('id')->on('color_category');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$t->dropForeign('category_color_category_id_foreign');
	}

}