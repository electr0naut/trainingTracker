<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Ubay\User;

class UserTableSeeder extends Seeder{

	public function run()
	{
	    DB::statement('SET FOREIGN_KEY_CHECKS = 0');	
		DB::table('users')->delete();

		User::create([
			'email' 	=> 	'u.gonzalez@gmail.com',
			'name'		=> 	'Ubay',
			'box_id'	=>  '1',
			'role_id'	=>	'1',
			'password'	=>	Hash::make('123456')]);

		User::create([
			'email' 	=> 	'foo@bar.com',
			'name'		=> 	'Bartolo',
			'box_id'	=>  '1',
			'role_id'	=>	'2',			
			'password'	=>	Hash::make('123456')]);

		User::create([
			'email' 	=> 	'foo@foo.com',
			'name'		=> 	'Wenceslao',
			'box_id'	=>  '1',
			'role_id'	=>	'3',			
			'password'	=>	Hash::make('123456')]);

		DB::statement('SET FOREIGN_KEY_CHECKS = 1');	
	} 
}