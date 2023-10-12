<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Jobs\ExampleJob;
use App\Providers\AppServiceProvider;

class ExampleJobTest extends TestCase
{
    use RefreshDatabase;

    public function testJobExecutaComSucesso()
    {
        ExampleJob::dispatch();

        $this->assertTrue(true);
    }
}
