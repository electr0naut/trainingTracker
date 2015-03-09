<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::create('boxes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->required();
			$table->timestamps();
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users');
		});

		DB::update('update boxes set user_id = 1');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

		Schema::table('users', function(Blueprint $table)
		{
			$table->dropForeign('users_box_id_foreign');		
		});

		Schema::drop('boxes');
	}

}