<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Classifieds\Role;

class RolesTableSeeder extends Seeder {

	public function run()
	{
                Role::create(['role' => 'user']);
                Role::create(['role' => 'admin']);
		
	}

}