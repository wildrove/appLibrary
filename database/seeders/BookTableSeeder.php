<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         \App\Models\Book::factory()->count(20)->create();
    }
}
