<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question_company', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('question_id')->unsigned();
			$table->foreign('question_id')
						->references('id')
						->on('questions')
						->onDelete('cascade');
			$table->integer('company_id')->unsigned();
			$table->foreign('company_id')
						->references('id')
						->on('companies')
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
		Schema::drop('question_company');
	}

}
