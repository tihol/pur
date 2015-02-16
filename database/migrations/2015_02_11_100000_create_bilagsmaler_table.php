<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilagsmalerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bilagsmaler', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('bilagstype');
			$table->timestamps();
			$table->integer('oppgaver_id')->unsigned();
			$table->foreign('oppgaver_id')
				->references('id')->on('oppgaver')
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bilagsmaler');
	}

}
