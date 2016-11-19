<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique('username_UNIQUE');
			$table->string('email')->unique();
			$table->string('password');
			$table->integer('roles_id')->unsigned()->nullable()->default(1)->index('role_idx');
			$table->string('first_name');
			$table->string('last_name');
			$table->date('birthday');
			$table->string('address');
			$table->integer('cities_id')->unsigned()->nullable()->index('city_user_idx');
			$table->string('phone');
			$table->boolean('activated')->default(0);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
