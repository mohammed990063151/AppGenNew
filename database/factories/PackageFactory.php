<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $duration =[30 , 60 , 90];
        return [
            'name'  =>$this->faker->name,
            'duration' => $duration[random_int(0, 2)],
            'price' => random_int(20, 90),
        ];
    }
}
