<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Ubay\PermissionRole;


class PermissionRoleTableSeeder extends Seeder {

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');    
    	DB::table('permission_role')->delete();

        PermissionRole::create(['permission_id' => 1,
        						'role_id' => 1]);
        PermissionRole::create(['permission_id' => 2,
        						'role_id' => 1]);
        PermissionRole::create(['permission_id' => 3,
        						'role_id' => 1]);  
        PermissionRole::create(['permission_id' => 4,
        						'role_id' => 1]);        						      						        
        PermissionRole::create(['permission_id' => 2,
        						'role_id' => 2]);
		PermissionRole::create(['permission_id' => 3,
        						'role_id' => 2]);
		PermissionRole::create(['permission_id' => 4,
        						'role_id' => 2]);		
        PermissionRole::create(['permission_id' => 3,
        						'role_id' => 3]);
        PermissionRole::create(['permission_id' => 4,
        						'role_id' => 3]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');            
    }
}