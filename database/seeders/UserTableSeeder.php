<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*\App\Models\User::factory()->count(20)->create()->each(function ($book){
            $books = factory(\App\Book::class)->make();
        
            
        });

        */

        factory(App\User::class, 10)->create()->each(function($user){

            $user->books()->save(factory(App\Book::class)->make());

        });


    }
}
