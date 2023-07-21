<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->company,
            'description' =>$this->faker->text(400),
            'address' =>$this->faker->address,
            'email' =>$this->faker->freeEmail,
            'location' =>$this->faker->city,
        ];
    }
}
