<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> $this->faker->sentence(), //Llena el campo con una oracion
            'descripcion'=>$this->faker->paragraph(), //Llena el campo con un parrafo
            'categoria'=> $this->faker->randomElement(['Desarrollo web', 'Diseño web']) //define que rellene aleatoriamente con los datos que se definan en el arreglo interno
        ];
    }
}
