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
           'title' =>fake()->sentence(mt_rand(2, 8)),
            'slug' => fake()->slug(),
           'pengarang'=>fake()->name(),
           'lokasi_ditemukan'=>fake()->country(),
           'tahun_ditemukan'=>fake()->year(),
           'bahasa'=>fake()->sentence(mt_rand(1,2)),
           'detail'=> fake()->paragraph(),
           'transkrip'=> collect($this->faker->paragraphs(mt_rand(2, 3)))
                ->map(fn ($p) => "<p>$p</p>")->implode(''),
            'category_id' => mt_rand(1, 3),
            'image' => 'script-images/sQ5N3IRahRQch6Iogu57N82CEgLZ0firUqIZzDwI.jpg',
             'translasi'=>fake()->paragraph()
               ];
           
    }
}
