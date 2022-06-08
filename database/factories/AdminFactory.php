<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomA' => $this->faker->name,
            'prenomA' => $this->faker->name,
            'emailA' => $this->faker->email,
            'passwordA' => $this->faker->password,
            'created_at' => now(),
        ];
        
    }
}
