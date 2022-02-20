<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoCreateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_should_create_a_todo()
    {
        $response = $this->post('/todos', [
            'title' => 'My Awesome Todo',
            'description' => 'This is my awesome todo',
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('todos', [
            'title' => 'My Awesome Todo',
            'description' => 'This is my awesome todo',
        ]);
    }
}
