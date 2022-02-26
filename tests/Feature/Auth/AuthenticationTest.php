<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get(route('login'));

        $response->assertOk();
    }

    public function test_users_can_authenticate_using_the_login_screen()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->verified()->create();

        $response = $this->post(route('login'), [
            'identifier' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);

        Auth::logout();

        $response = $this->post(route('login'), [
            'identifier' => $user->username,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->create();

        $this->post(route('login'), [
            'identifier' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
