<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }
    private function getData()
    {
        $faker = Faker\Factory::create('ru_RU');

        $data = [];
        for($i = 0; $i < 5; $i++){
            $data[] =[
                'categoryName' => $faker->word(1)
            ];
        }
        return $data;
    }
}
