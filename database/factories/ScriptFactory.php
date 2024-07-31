<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Script>
 */
class ScriptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(2, 8)),
            'slug' => fake()->slug(),
            'pengarang' => fake()->name(),
            'lokasi' => fake()->country(),
            'tahun' => fake()->year(),
            'bahasa' => fake()->sentence(mt_rand(1, 2)),
            'detail' => collect($this->faker->paragraphs(mt_rand(2, 3)))
                ->map(fn ($p) => "<p>$p</p>")->implode(''),
            'transliterasi' => fake()->paragraph(),
            'category_id' => mt_rand(1, 3),
            'translasi' => fake()->paragraph()
        ];
    }
}
