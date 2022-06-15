<?php

namespace Database\Factories;

use App\Models\Kegiatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Kegiatan::class;
    public function definition()
    {
        return [
            'nama'=> $this->faker->name(),
            'deskripsi'=> $this->faker->text(),
        ];
    }
}
