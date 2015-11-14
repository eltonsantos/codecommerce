<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        factory('CodeCommerce\Product', 15)->create();

        /*$faker = Faker::create();

        foreach(range(1, 15) as $i){

            Product::create([
                'name' => $faker->word(),
                'description' => $faker->sentence(),
                'price' => $faker->randomDigitNotNull(4)
            ]);

        }
        */
    }
}
