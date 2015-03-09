<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');		

		$this->call('BoxesTableSeeder');		
		$this->command->info('Boxes table seeded!');			

		$this->call('PermissionsTableSeeder');		
		$this->command->info('Permissions table seeded!');			

		$this->call('RolesTableSeeder');		
		$this->command->info('Roles table seeded!');					

		$this->call('PermissionRoleTableSeeder');		
		$this->command->info('PermissionRole table seeded!');					
	
	}

}
