<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ads', function(Blueprint $table)
		{
			$table->foreign('calendars_id', 'calendar')->references('id')->on('calendars')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('categories_id', 'category')->references('id')->on('categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cities_id', 'city')->references('id')->on('cities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('companies_id', 'company')->references('id')->on('companies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ads', function(Blueprint $table)
		{
			$table->dropForeign('calendar');
			$table->dropForeign('category');
			$table->dropForeign('city');
			$table->dropForeign('company');
		});
	}

}
