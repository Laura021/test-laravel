<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactsCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fact_has_category', function(Blueprint $table)
		{
			$table->engine = 'InnoDb';
				
			$table->increments('id');
			$table->unsignedInteger('fact_id');
			$table->unsignedInteger('category_id');
			$table->timestamps();
			
			$table->foreign('fact_id')->references('id')->on('facts');
			$table->foreign('category_id')->references('id')->on('category');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fact_has_category');
	}

}
