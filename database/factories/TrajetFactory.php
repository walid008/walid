<?php

namespace Database\Factories;

use App\Models\Trajet;
use App\Models\User;
use App\Models\Societe;
use Illuminate\Database\Eloquent\Factories\Factory;



class TrajetFactory extends Factory
{



    protected $model = Trajet::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'adress_depart'=> $this->faker->lastName(),
            'adress_arriver' => $this->faker->lastName(),
            'nombre_km'=> $this->faker->bothify('###'),
            'date_trajet'=> $this->faker->dateTimeBetween('-30 days', '+30 days'),
            'heure_depart'=> $this->faker->dateTimeBetween('-30 days', '+30 days'),
            'heure_arriver' => $this->faker->dateTimeBetween('-30 days', '+30 days'),
            'nombre_passager'=> $this->faker->bothify('#####'),
            'prix'=> $this->faker->bothify('##'),
            'type_voiture'=> $this->faker->lastName(),
            
      

        ];
    }
}
