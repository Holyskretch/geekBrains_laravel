<?php

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
         $this->call(NewsSeeder::class);
         $this->call(CategoriesSeeder::class);
         $this->call(SourcesSeeder::class);
        $this->call(NewsToCategoriesSeeder::class);
        $this->call(NewsToSourcesSeeder::class);
    }
}
