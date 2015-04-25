<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionPositionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question_position', function(Blueprint $table)
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
		Schema::drop('question_position');
	}

}
