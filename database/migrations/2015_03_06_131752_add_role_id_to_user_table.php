<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleIdToUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');		
		Schema::table('users', function($table) 
		{
			$table->integer('role_id')->unsigned()->index();			
			$table->foreign('role_id')->references('id')->on('roles');

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
		//
	}

}
