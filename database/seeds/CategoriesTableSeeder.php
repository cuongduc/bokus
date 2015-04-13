<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;
use bokus\Category as Category;

class CategoriesTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Category::create(['Cooking, Food & Wine', 'cooking']);
        Category::create(['Religion & Inspiration', 'religion-inspiration']);
        Category::create(['Science Fiction & Fantasy', 'science-fiction']);

    }

}