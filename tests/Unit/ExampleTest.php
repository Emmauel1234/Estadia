<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
/** @test */
public function it_checks_if_user_has_an_email()
{
    // Simulamos un usuario
    $user = new User([
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
    ]);

    // Aseguramos que el email existe
    $this->assertEquals('johndoe@example.com', $user->email);
}
}
