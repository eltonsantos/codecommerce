<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Category;
//use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        factory('CodeCommerce\Category', 10)->create();

        /*$faker = Faker::create();

        foreach(range(1, 10) as $i){

            Category::create([
                'name' => $faker->word(),
                'description' => $faker->sentence()
            ]);

        }*/

        /*
         * GERANDO SEED MANUALMENTE
         * Category::create([
            'name' => 'Category 1',
            'description' => 'Description Category 1'
        ]);*/

    }
}
