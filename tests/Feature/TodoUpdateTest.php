<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Todo;

class TodoUpdateTest extends TestCase
{
    /**
     * A todo can be updated.
     *
     * @return void
     */
    public function test_should_update_todo()
    {
        $todo = Todo::factory()->create();

        $response = $this->put('/todos/' . $todo->id, [
            'title' => 'My Updated Todo',
            'description' => 'This is my updated todo',
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('todos', [
            'title' => 'My Updated Todo',
            'description' => 'This is my updated todo',
        ]);
    }
}
