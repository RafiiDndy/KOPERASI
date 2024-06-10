<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddSimpananTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Login')
                    ->type('email','abiyogaa87@gmail.com')
                    ->type('password','12345678')
                    ->press('LOG IN')
                    ->clickLink('Simpanan')
                    ->type('jumlah',100)
                    ->select('jenis_simpanan','Wajib')
                    ->select('month','Januari')
                    ->select('year','2024')
                    ->attach('bukti_transfer',storage_path('app/public/testing/test_upload.jpg'));
        });
    }
}
