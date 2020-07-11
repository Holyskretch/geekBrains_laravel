<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }
    private function getData()
    {
        $faker = Faker\Factory::create('ru_RU');

        $data = [];
        for($i = 0; $i < 50; $i++){
            $data[] =[
                'category_id' => $faker->numberBetween(1,5),
                'source_id'=> $faker->numberBetween(1,10),
                'title' =>$faker->sentence(rand(3,10)),
                'summary' => $faker->realText(rand(30,70)),
                'text' => $faker->realText(rand(100,200)),
                'created_at' => $faker->dateTime(),
            ];
        }
        return $data;
    }
}
