<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Todo;

class TodoDeleteTest extends TestCase
{
    /**
     * A todo can be deleted.
     *
     * @return void
     */
    public function test_should_delete_todo()
    {
        $todo = Todo::factory()->create();

        $response = $this->delete('/todos/' . $todo->id);

        $response->assertStatus(302);

        $this->assertDatabaseMissing('todos', [
            'id' => $todo->id,
        ]);
    }
}
