<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('title')->nullable();
			$table->string('email')->unique();
			$table->string('tax_id', 11)->nullable()->unique();
			$table->integer('categories_id')->unsigned()->nullable()->index('category_company_idx');
			$table->boolean('subscriptiontype');
			$table->boolean('payment')->nullable();
			$table->integer('cities_id')->unsigned()->nullable()->index('city_company_idx');
			$table->string('address');
			$table->string('contact', 128);
			$table->string('phone', 128);
			$table->string('website', 512)->nullable();
			$table->date('licence');
			$table->text('description', 65535)->nullable();
			$table->timestamps();
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
		Schema::drop('companies');
	}

}
