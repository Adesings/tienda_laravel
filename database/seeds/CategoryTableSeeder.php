<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array(
			[
				'name' => 'Anime', 
				'slug' => 'anime', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#FF5733'
			],
			[
				'name' => 'Geek', 
				'slug' => 'geek', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#139dce'
            ]
        );
        Category::insert($data);
    }
}
