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
    public function testRegister(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Register')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'naufal')
                    ->type('email', 'naufal@gmail.com')
                    ->type('password', 'naufal')
                    ->type('password_confirmation', 'naufal')
                    ->press('REGISTER');
        });
    }
}
