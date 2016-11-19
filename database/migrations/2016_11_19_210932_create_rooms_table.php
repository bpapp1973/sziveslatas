<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ads_id')->unsigned()->unique('ads_id_UNIQUE');
			$table->string('name');
			$table->integer('area')->nullable();
			$table->integer('seats');
			$table->string('assets', 1024)->nullable();
			$table->text('description', 65535)->nullable();
			$table->dateTime('created_at')->nullable();
			$table->dateTime('updates_at')->nullable();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rooms');
	}

}
