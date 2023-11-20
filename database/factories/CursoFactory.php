<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $curso = ["Matematicas", "Lenguaje", "Dibujo", "Sociales", "Cultura_Fisica", "Computacion", "Quimica"];
        $materia = $curso[rand(0,6)];
        return [
            'nombre'=>$curso[rand(0,6)],
        ];
    }
}
