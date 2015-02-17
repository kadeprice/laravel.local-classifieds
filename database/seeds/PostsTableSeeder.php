<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Classifieds\Post;

class PostsTableSeeder extends Seeder {

	public function run()
	{
			
                Post::create(
                    [
                        'title' => 'First Post', 
                        'body' => 'This is the post body' ,
                        'location' => 'Malad', 
                        'amount' => 10.00,
                        'user_id' => 1,
                        'category_id' => 1,
                        'active' => true,
                        'approved' => true,
                    ]
                );
		
	}

}