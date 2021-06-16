<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'publisher' => 'Editora ' . $this->faker->firstName,
            'author' => $this->faker->name,
            'year' => $this->faker->year,
            'status' => $this->faker->randomElement(['avaliable', 'unavaliable']),
            'description' => $this->faker->sentence,
            'slug' => $this->faker->slug,

        ];
    }
}
