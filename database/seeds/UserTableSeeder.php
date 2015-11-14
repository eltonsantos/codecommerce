<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\User;
//use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        //$faker = Faker::create();

        /*GERANDO USUARIOS MANUALMENTE
        User::create([
            'name' => "Elton Santos",
            'email' => "elton@gmail.com",
            'password' => Hash::make("12345678")
        ]);*/

        /* GERANDO USUARIOS PELO FACTORY */
        factory('CodeCommerce\User')->create(
            [
                'name' => "Elton Santos",
                'email' => "eltin182@gmail.com",
                'password' => Hash::make("12345678")
            ]
        );

        factory('CodeCommerce\User', 10)->create();

        /* GERANDO USUARIOS PELO FAKER
        foreach(range(1, 10) as $i){

            User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make($faker->word)
            ]);
        }*/
    }
}
