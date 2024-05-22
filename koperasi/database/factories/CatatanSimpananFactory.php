<?php

namespace Database\Factories;

use App\Models\CatatanSimpanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CatatanSimpanan>
 */
class CatatanSimpananFactory extends Factory
{
    protected $model = CatatanSimpanan::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1,50),
            'jumlah' => $this->faker->numberBetween(1000,1000000000),
            'jenis_simpanan' => $this->faker->randomKey(['Pokok' => 1,'Wajib' => 2,'Sukarela' => 3]),
            'status' => $this->faker->randomKey(['menunggu verifikasi' => 1,'Verified' => 2,'Rejected' => 3]),
            'bukti_transfer' =>  'bukti_transfer/'.$this->faker->image('public/storage/bukti_transfer',640,480,null,false),
            'bulan' =>  $this->faker->date('Y-m-d'),
        ];
    }
}
