<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class PostMigrationTest extends TestCase
{
    public function testPostsTableExists()
    {
        $this->assertTrue(Schema::hasTable('posts'));
    }
}