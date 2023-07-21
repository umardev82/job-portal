<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/*
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomElement = Arr::random(['manager', 'Developer', 'Office_boy', 'Project manager','system Administrator']);

        return [
            'title' => $this->faker->jobTitle,
            'description'=> $this->faker->text(200),
            'created_by' => $this->faker->randomNumber(3),
            'company' => $this->faker->company,
            'designation' =>$this->$randomElement ,
            'location' => $this->faker->city,
        ];
    }
}
