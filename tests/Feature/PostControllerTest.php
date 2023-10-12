<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        $response = $this->get(route('posts.index'));

        $response->assertStatus(200);
        $response->assertViewIs('posts.index');
        $response->assertViewHas('posts');
    }

    public function testCreate()
    {
        $response = $this->get(route('posts.create'));

        $response->assertStatus(200);
        $response->assertViewIs('posts.create');
    }

    public function testStore()
    {
        $postData = [
            'title' => 'Test Post',
            'content' => 'This is a test post content.',
        ];

        $response = $this->post(route('posts.store'), $postData);

        $response->assertRedirect(route('posts.index'));
        $this->assertDatabaseHas('posts', $postData);
    }

    public function testShow()
    {
        $post = Post::create([
            'title' => 'Test Post Title',
            'content' => 'Test Post Content',
        ]);

        $response = $this->get(route('posts.show', $post->id));

        $response->assertStatus(200);
        $response->assertViewIs('posts.show');
        $response->assertViewHas('post', $post);
    }

    public function testEdit()
    {
        $post = Post::create([
            'title' => 'Test Post Title',
            'content' => 'Test Post Content',
        ]);

        $response = $this->get(route('posts.edit', $post->id));

        $response->assertStatus(200);
        $response->assertViewIs('posts.edit');
        $response->assertViewHas('post', $post);
    }

    public function testUpdate()
    {
        $post = Post::create([
            'title' => 'Test Post Title',
            'content' => 'Test Post Content',
        ]);

        $updatedData = [
            'title' => 'Updated Post Title',
            'content' => 'Updated post content.',
        ];

        $response = $this->put(route('posts.update', $post->id), $updatedData);

        $response->assertRedirect(route('posts.index'));
        $this->assertDatabaseHas('posts', $updatedData);
    }

    public function testDestroy()
    {
        $post = Post::create([
            'title' => 'Test Post Title',
            'content' => 'Test Post Content',
        ]);

        $response = $this->delete(route('posts.destroy', $post->id));

        $response->assertRedirect(route('posts.index'));
        $this->assertDatabaseMissing('posts', ['id' => $post->id]);
    }
}