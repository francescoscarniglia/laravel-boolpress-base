<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // blog tags
       $tags= [
        'Educational',
        'Html',
        'Scss',
        'Lavarel'
       ];

    //   seeding
       foreach ($tags as $tag) {
         $newTag = new Tag();
         $newTag->name = $tag;

         $newTag->save();
       }
    }
}
