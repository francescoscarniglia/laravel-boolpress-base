<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tot_products = 10;
        for ( $i=0 ; $i < $tot_products ; $i++ ) {

            // new instance
            $newProduct = new Product();
            $newProduct->$faker->name;
            $newProduct->$faker->randomNumber(2);
            $newProduct->$faker->text;
            $newProduct->$faker->text($maxNbChars = 200)

        }
    }
}
