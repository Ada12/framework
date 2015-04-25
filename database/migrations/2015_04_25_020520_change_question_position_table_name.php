<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeQuestionPositionTableName extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('question_position');
		Schema::create('position_question', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('question_id')->unsigned();
			$table->foreign('question_id')
						->references('id')
						->on('questions')
						->onDelete('cascade');
			$table->integer('position_id')->unsigned();
			$table->foreign('position_id')
						->references('id')
						->on('positions')
						->onDelete('cascade');
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
		Schema::drop('position_question');
	}

}
