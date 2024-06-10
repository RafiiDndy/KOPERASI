<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.

     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Sign Up')
                    ->assertPathIs('/register')
                    ->type('name','admin')
                    ->type('email','admin@mail.co')
                    ->type('nik','123456789101112')
                    ->type('no_hp','081234567891')
                    ->type('tanggal_lahir','2024-01-05')
                    ->attach('foto_ktp','C:\Users\Dandy\Downloads\Screenshot 2024-05-22 221344.png')
                    ->type('password','12345678')
                    ->type('password_confirmation','12345678')
                    ->check('terms')
                    ->press('Sign up');

        });
    }
}
