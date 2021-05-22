<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Rent::factory()->count(10)->create();
    }
}
