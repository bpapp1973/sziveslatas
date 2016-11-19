<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('isvalid')->default(0);
			$table->string('title');
			$table->string('website', 1024)->nullable();
			$table->integer('companies_id')->unsigned()->nullable()->index('companies_id_idx');
			$table->integer('categories_id')->unsigned()->nullable()->index('categories_idx');
			$table->integer('cities_id')->unsigned()->nullable()->index('cities_id_idx');
			$table->integer('calendars_id')->unsigned()->nullable()->index('calendars_idx');
			$table->string('responsible');
			$table->string('address')->nullable();
			$table->string('phone');
			$table->string('email');
			$table->text('description', 65535);
			$table->integer('price');
			$table->integer('discountprice')->nullable();
			$table->integer('visitors')->nullable();
			$table->text('menu1', 65535)->nullable();
			$table->text('menu2', 65535)->nullable();
			$table->text('menu3', 65535)->nullable();
			$table->text('menu4', 65535)->nullable();
			$table->date('startdate')->nullable();
			$table->date('enddate')->nullable();
			$table->date('expireson');
			$table->integer('created_by')->unsigned()->nullable();
			$table->timestamps();
			$table->integer('updated_by')->unsigned()->nullable();
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
		Schema::drop('ads');
	}

}
