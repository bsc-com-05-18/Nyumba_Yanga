<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ProductReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create();

       foreach (range(1, 100) as $index) {
            Review::create([
                "user_id" => rand(1, 10),
                "property_id" => rand(1, 20),
                "rating" => rand(1, 5),
                "comment" => $faker->paragraph,
                "status" => $this->getRandomStatus()

                
            ]);
       }
    }

    public function getRandomStatus()
    {
        $statuses = array("visible", "hidden");
        return $statuses[array_rand($statuses)];
    }
}
