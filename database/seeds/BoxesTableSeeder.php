<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Ubay\User;
use App\Ubay\Box;

class BoxesTableSeeder extends Seeder{

	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::table('boxes')->delete();

		Box::create([
			'name' 	=> 'Maquinarias Paco',
			'user_id' => 1,
		]);
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}
}