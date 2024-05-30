<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class VerifikasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Verifikasi
     */
    public function testExample(): void
    {
        $user = User::find(2);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                    ->visit('/dashboard')
                    ->assertPathIs('/dashboard')
                    ->click('@manage')
                    ->click('@anggota')
                    ->click('@verifikasi')
                    ->click('@approve');           
        });
    }
}
