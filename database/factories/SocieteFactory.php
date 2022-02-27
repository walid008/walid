<?php

namespace Database\Factories;

use App\Models\Societe;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;



class SocieteFactory extends Factory
{



    protected $model = Societe::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'=>'3',
            'nom_societe'=> $this->faker->lastName(),
            'email_societe' => $this->faker->lastName(),
            'adresse_societe'=> $this->faker->firstName(),
            'num_tel_societe'=> $this->faker->bothify('#####'),
            'tva_societe'=> $this->faker->bothify('#####'),
            'label_societe' => $this->faker->lastName(),
            'p_nom_societe'=> $this->faker->lastName(),
            'p_prenom_societe'=> $this->faker->lastName(),
            'p_tel_societe'=> $this->faker->bothify('#####'),
        ];
    }
}
