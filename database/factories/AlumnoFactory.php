<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->firstname(),
            'apellido'=>fake()->lastName(),
            'correo_electronico'=>fake()->email(),  
            'contrasena'=>fake()->password(),
            'telefono'=>fake()->phoneNumber(),
            'direccion'=>fake()->address(),
        ];
    }
}
