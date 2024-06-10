<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Login')
                    ->assertPathIs('/login')
                    ->type('email','admin@mail.co')
                    ->type('password','12345678')
                    ->press('LOG IN')
                    ->visit('/dashboard')
                    ->mouseover('.Btn-logout')
                    ->press('Logout');
        });
    }
}
