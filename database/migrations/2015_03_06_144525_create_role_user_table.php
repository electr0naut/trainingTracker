<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUserTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');		
		Schema::create('role_user', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('role_id')->index();
			$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
			$table->unsignedInteger('user_id')->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->timestamps();
		});
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');		
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role_user');
	}
}