<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Etudiant::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomE' => $this->faker->name,
            'prenomE' => $this->faker->name,
            'numeroE' => $this->faker->phoneNumber,
            'date_naissance'=>$this->faker->date,
            'numeroE'=>$this->faker->phoneNumber,
            'emailE'=>$this->faker->email,
            'date_debut'=>$this->faker->date,
            'created_at' => now(),
        ];
    }
}
