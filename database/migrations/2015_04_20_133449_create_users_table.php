<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
			$table->string('name',50)->unique();
			$table->string('email',50)->unique();
			$table->string('password',50);
			$table->string('avatar',250)->default('http://placehold.it/80x80');
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
