<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Ubay\Permission;


class PermissionsTableSeeder extends Seeder {

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');            
        DB::table('permissions')->delete();

        Permission::create(['slug' => 'manage_boxes',
        			'name' => 'manage_boxes',
        			'description' => 'Add/Edit/Delete Boxes']);
        Permission::create(['slug' => 'manage_trainers',
        			'name' => 'manage_trainers',
        			'description' => 'Add/Edit/Delete Trainers to a Box']);
        Permission::create(['slug' => 'manage_training',
        			'name' => 'manage_training',
        			'description' => 'Add/Edit/Delete Training Sessions']);
		Permission::create(['slug' => 'manage_schedule',
        			'name' => 'manage_schedule',
        			'description' => 'Add/Delete Attendance to a Training Session']);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');            
	}
}