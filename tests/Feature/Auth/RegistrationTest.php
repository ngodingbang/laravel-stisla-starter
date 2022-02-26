<?php

namespace Tests\Feature\Auth;

use App\Infrastructure\Auth\Notifications\VerifyEmailQueued;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get(route('register'));

        $response->assertOk();
    }

    public function test_new_users_can_register()
    {
        Notification::fake();

        /** @var \App\Models\User $user */
        $user = User::factory()->make();

        $response = $this->post(route('register'), [
            'username' => $user->username,
            'name' => $user->name,
            'email' => $user->email,
            'password' => 'password',
            'password_confirmation' => 'password',
            'agree_with_terms' => true,
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('verification.notice'));

        Notification::assertSentTo(User::firstWhere('username', $user['username']), VerifyEmailQueued::class);
    }
}
