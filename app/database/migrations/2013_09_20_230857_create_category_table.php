<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category', function(Blueprint $t)
		{
			$t->engine = 'InnoDB';
			
			$t->increments('id');
			$t->string('name');
			$t->string('points');
			$t->unsignedInteger('color_category_id');			
			$t->timestamps();
			
			//FOREING KEYS ASSIGNATION
			//$t->foreign('color_category_id')->references('id')->on('color_category');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category');
	}

}
