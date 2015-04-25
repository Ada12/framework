<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
			$table->text('content');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
						->references('id')
						->on('users')
						->onDelete('cascade');

			// Nesting comments support
			//
			// Not going to be used now
			//
			// $table->foreign('parent_comment_id')->references('id')->on('comments');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}
