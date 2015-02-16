<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		
			
                    User::create(['fname' => 'Kade', 'lname' => 'Price' ,'email' => 'kadeprice@gmail.com', 'password' => 'password']);
                    User::create(['fname' => 'Juan', 'lname' => 'Lizarazo' ,'email' => 'gabriellg4@gmail.com', 'password' => 'password']);
                    User::create(['fname' => 'Anthony', 'lname' => 'Guertin' ,'email' => 'anthony.guertin@gmail.com', 'password' => 'password']);
		
	}

}