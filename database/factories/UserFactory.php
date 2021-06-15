<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class UserFactory extends factory
{
    protected $model = User::class;
    
    public function definition()
    {
        
        return [
            'name' => $this->faker->name,
            'user_name' => $this->faker->unique()->userName,
            'user_type' => $this->faker->randomElement(['administrator', 'student']),
            'cpf' => $this->faker->cpf,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'password' => md5(Str::random(8)),
            'email_verified_at' => null,
            'remember_token' => Str::random(10),
        ];
    }

}



