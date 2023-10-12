<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GreetUserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the "app:greet-user" console command.
     */
    public function testGreetUserCommand()
    {
        $name = 'John';

        $this->artisan('app:greet-user', ['name' => $name])
            ->expectsOutput("Hello, $name!")
            ->assertExitCode(0);
    }
}
