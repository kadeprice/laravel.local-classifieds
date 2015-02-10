<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RoleUserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
                
                RoleUser::create(['role_id' => '2', 'user_id' => 1]);
		
	}

}