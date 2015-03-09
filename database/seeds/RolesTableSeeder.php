<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Ubay\Role;


class RolesTableSeeder extends Seeder {

    public function run()
    {
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');        	
    	DB::table('roles')->delete();

    	Role::create(['name' => 'superusuario',
    				'slug' => 'superusuario',
    				'description' => 'Super usuario']);
		Role::create(['name' => 'admin',
		    				'slug' => 'admin',
		    				'description' => 'Box admin']);
		Role::create(['name' => 'trainer',
		    				'slug' => 'trainer',
		    				'description' => 'Trainer']);
		Role::create(['name' => 'athlete',
		    				'slug' => 'athlete',
		    				'description' => 'Athlete']);		
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');    		
	}
}

