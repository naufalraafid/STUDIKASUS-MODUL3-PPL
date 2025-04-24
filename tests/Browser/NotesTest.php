<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{

    /**
     * A Dusk test example.
     * @group Notes
     */
    public function testNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Notes')
                    ->clickLink('Create Note')
                    ->assertPathIs('/notes')
                    ->type('title', 'p')
                    ->type('description', 'aa')
                    ->press('CREATE');
        });
    }
}
