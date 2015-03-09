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
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');		
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->integer('box_id')->unsigned()->index();
			$table->foreign('box_id')->references('id')->on('boxes');
			$table->rememberToken();
			$table->timestamps();
		});
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');		
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
