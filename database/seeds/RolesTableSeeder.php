<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
                Role::create(['role' => 'user']);
                Role::create(['role' => 'admin']);
		
	}

}