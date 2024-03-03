<?php

namespace Tests\Unit;

use App\User;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function register()
    {
        $data = [
            'name' => 'john',
            'email' => 'john@example.com',
            'password' => 'john',
        ];
        User::register($data);

        $this->assertDatabaseHas('users', [
            'name' => 'john',
            'email' => 'john@example.com',
            'password' => bcrypt('john')
        ]);
    }
}
