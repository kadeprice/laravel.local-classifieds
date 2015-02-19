<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Classifieds\User;

class UsersTableSeeder extends Seeder {

	public function run()
	{
			
                User::create(['fname' => 'Kade', 'lname' => 'Price' ,'email' => 'kadeprice@gmail.com', 'password' => 'password']);
                User::create(['fname' => 'Juan', 'lname' => 'Lizarazo' ,'email' => 'gabriellg4@gmail.com', 'password' => 'password']);
		
	}

}