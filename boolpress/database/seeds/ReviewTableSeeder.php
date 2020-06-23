<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Review;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $products = Product::all();

        // total reviews
        $total_reviews = 20;
        if ($i = 0; i < $total_reviews; i++) {
            $newReview = new Review();
            $newReview ->product_id = $products->random()->id;
            $newReview->title = $faker->text(10);

        }
    }
}
