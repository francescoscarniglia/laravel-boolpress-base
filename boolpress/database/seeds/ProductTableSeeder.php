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
            $newProduct->name= $faker->text(10);
            $newProduct->price= $faker->randomFloat( 2 , 1 , 999 );
            $newProduct->description= $faker->paragraphs(5, true);


            $newProduct->save();
        }
    }
}
