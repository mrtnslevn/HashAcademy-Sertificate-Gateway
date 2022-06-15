<?php

namespace Database\Factories;

use App\Models\sertifikat;
use Illuminate\Database\Eloquent\Factories\Factory;

class SertifikatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = sertifikat::class;
    public function definition()
    {
        return [
            'Nama_Peserta'=>$this->faker->name(),
            'Nama_Kegiatan'=>$this->faker->name(),
            'kode_unik'=>$this->faker->text(),
            'sertifikat_path'=>$this->faker->text(),
        ];
    }
}
