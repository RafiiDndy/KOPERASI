<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Login')
                    ->assertPathIs('/login')
                    ->type('email', 'admin@mail.com')
                    ->type('password', '12345678')
                    ->click('[x-button="x-button"]')
                    ->assertPathIs('/dashboard')
                    ->mouseover('@logout')
                    ->click('@logout')
                    ->assertPathIs('/');
                    

        });
    }
}
