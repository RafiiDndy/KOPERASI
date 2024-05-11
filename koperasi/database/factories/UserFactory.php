<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => $this->faker->name(),
           'email' => $this->faker->email(),
           'role' => 'Anggota',
           'nik' => $this->faker->nik(),
           'no_hp' => $this->faker->randomNumber(9,true),
           'umur' => $this->faker->randomNumber(2),
           'tanggal_lahir' => $this->faker->date('Y-m-d'),
           'status_anggota' =>$this->faker->randomKey(['Not_verified' => 1,'Aktif' => 2,'Tidak Aktif' => 3]),
           'password' => Hash::make('12345678'),
           'ktp_photo_path' => 'foto_ktp/'.$this->faker->image('public/storage/foto_ktp',640,480,null,false)
        ];
    }
}
