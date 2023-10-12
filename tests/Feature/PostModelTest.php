<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostModelTest extends TestCase
{
    public function testCreateNewPost()
    {
        $post = Post::create([
            'title' => 'Sample Post',
            'content' => 'This is a test post.'
        ]);

        $this->assertDatabaseHas('posts', [
            'id' => $post->id,
            'title' => 'Sample Post',
            'content' => 'This is a test post.'
        ]);
    }
}