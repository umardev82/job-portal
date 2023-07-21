<?php

namespace Database\Factories;
use Faker\Factory as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{

    protected $model = Company::class;


    public function definition(): array
    {
        return [
            'name' =>$this->faker->title,
            'description' =>$this->faker->text(400),
            'address' =>$this->faker->address,
            'email' =>$this->faker->freeEmail,
            'location' =>$this->faker->city,
        ];

    }

}
