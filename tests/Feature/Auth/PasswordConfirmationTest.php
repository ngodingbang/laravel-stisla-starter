<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class PasswordConfirmationTest extends TestCase
{
    public function test_confirm_password_screen_can_be_rendered()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->unverified()->create();

        $response = $this->actingAs($user)->get(route('password.confirm'));

        $response->assertOk();
    }

    public function test_password_can_be_confirmed()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->unverified()->create();

        $response = $this->actingAs($user)->post(route('password.confirm'), [
            'password' => 'password',
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
    }

    public function test_password_is_not_confirmed_with_invalid_password()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->unverified()->create();

        $response = $this->actingAs($user)->post(route('password.confirm'), [
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors();
    }
}
