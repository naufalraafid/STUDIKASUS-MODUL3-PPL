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
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Log in')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'naufal@gmail.com')
                    ->type('password', 'naufal')
                    ->press('LOG IN');
        });
    }
}
