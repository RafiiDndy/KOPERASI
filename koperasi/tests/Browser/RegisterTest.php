<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Sign Up')
                    ->assertPathIs('/register')
                    ->type('name', 'Pandu')
                    ->type('email', 'pandu@mail.com')
                    ->type('nik', '12312244')
                    ->type('no_hp', '082211212122')
                    ->type('tanggal_lahir', '2000-12-12')
                    ->attach('foto_ktp', 'C:/Users/lenovo/Downloads/2.jpg')
                    ->type('password', '12345678')
                    ->type('password_confirmation', '12345678')
                    ->check('terms')
                    ->click('@signup');
        });
    }
}
