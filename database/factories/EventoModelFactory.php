<?php

namespace Database\Factories;

use App\Models\CategoriaModel;
use App\Models\EventoModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventoModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nome' => $this->faker->name,
            'local_evento' => $this->faker->address,
            'data_evento' => $this->faker->date,
            'hora_evento' => $this->faker->time,
            'categoria' => CategoriaModel::query()->inRandomOrder()->value('id'),
            'descricao' => $this->faker->text,
            'imagem' => $this->faker->imageUrl(),
            'rede_social' => $this->faker->url,
        ];
    }
}
