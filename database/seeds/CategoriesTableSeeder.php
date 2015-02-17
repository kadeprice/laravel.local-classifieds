<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Classifieds\Categories;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
			
                Categories::create(['category' => 'For Sell']);                
                Categories::create(['category' => 'Event']);
                Categories::create(['category' => 'Wanted']);
                Categories::create(['category' => 'Job']);
                Categories::create(['category' => 'Services']);
		
	}

}