<?php

namespace Database\Factories;

use App\Models\TipVozila;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Oglas>
 */
class OglasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'marka'=>$this->faker->word,
            'model'=>$this->faker->asciify('X ***'),
            'godiste'=>$this->faker->year($max = 'now'),
            'gorivo'=>$this->faker->randomElement($array = array ('bezin','dizel','gas','elektricni')) ,
            'tip_vozila_id'=>TipVozila::factory(),
            'user_id'=>User::factory()
        ];
    }
}
