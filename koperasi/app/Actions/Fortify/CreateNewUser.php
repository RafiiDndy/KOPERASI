<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Carbon\Carbon;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nik' => ['required', 'digits_between:8,24', 'unique:users'],
            'no_hp' => ['required'],
            'tanggal_lahir' => ['required'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
      
        $tanggal_lahir = Carbon::createFromFormat('Y-m-d', $input['tanggal_lahir']);
        $umur = $tanggal_lahir->age;

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'nik' => $input['nik'],
            'no_hp' => $input['no_hp'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'umur' => $umur,
            'password' => Hash::make($input['password']),
            'role' => 'Anggota',
        ]);
    }
}
