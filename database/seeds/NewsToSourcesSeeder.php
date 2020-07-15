<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsToSourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_to_source')->insert($this->getData());
    }
    private function getData()
    {
        $faker = Faker\Factory::create('ru_RU');

        $data = [];
        for($i = 0; $i < 50; $i++){
            $data[] =[
                'source_id' => $faker->numberBetween(1,5),
                'news_id' => $faker->numberBetween(1,50)
            ];
        }
        return $data;
    }
}
