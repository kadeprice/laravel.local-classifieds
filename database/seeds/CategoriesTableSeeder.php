<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Classifieds\Categories;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
			
                Categories::create(['category' => 'For Sell', 'key' => 'for-sell']);                
                Categories::create(['category' => 'Event', 'key' => 'events']);
                Categories::create(['category' => 'Wanted', 'key' => 'wanted']);
                Categories::create(['category' => 'Jobs', 'key' => 'jobs']);
                Categories::create(['category' => 'Services', 'key' => 'service']);
		
	}

}