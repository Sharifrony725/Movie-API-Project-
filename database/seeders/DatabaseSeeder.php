<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Movie;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $categories = ['Action','Horror','Fantasy','Scifi'];
        foreach($categories as $category){
            Category::create([
                'name' =>  $category,
                'slug' => $category,
            ]);
        }
        Movie::factory()->create(10);
    }
}
