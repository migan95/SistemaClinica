<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testDbUsuarioAdmin()
    {
        $user = User::factory()->create([
            'name' => 'PruebaAdmin',
            'role' => 1
        ]);
        $this->assertDatabaseHas(
            'users',
            $user->toArray()
        );
    }
    public function testDbUsuarioNormal()
    {
        $user = User::factory()->create([
            'name' => 'PruebaUsuario',
            'role' => 2
        ]);
        $this->assertDatabaseHas(
            'users',
            $user->toArray()
        );
    }

}
