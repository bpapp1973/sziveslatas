<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_companies', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('users_id');
			$table->integer('companies_id');
			$table->boolean('valid')->default(1);
			$table->timestamps();
			$table->index(['users_id','companies_id'], 'user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_companies');
	}

}
