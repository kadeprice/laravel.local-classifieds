<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;
use Classifieds\Drop;

class DropsTableSeeder extends Seeder {

    public function run()
    {
        for ($i=0; $i <= 10; $i++){
        
         Drop::create(
                    [
                     'username' => 'kade',
                     'pin' => '1234',
                     'description' => 'AWESOME DROP',
                     'drop_date' => date("Y-m-d h:m:i")
                    ]
                );
        }
    }

}