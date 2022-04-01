<?php

use Illuminate\Support\Facades\Password;

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = pest_create_random_user();
});

it('has authentication forgot-password page', function () {
    actingAs($this->user)
        ->get(route('auth-page.forgot-password'))
        ->assertOk();
});

it('has authentication login page', function () {
    actingAs($this->user)
        ->get(route('auth-page.login'))
        ->assertOk();
});

it('has authentication login-2 page', function () {
    actingAs($this->user)
        ->get(route('auth-page.login-2'))
        ->assertOk();
});

it('has authentication register page', function () {
    actingAs($this->user)
        ->get(route('auth-page.register'))
        ->assertOk();
});

it('has authentication reset-password page', function () {
    actingAs($this->user)
        ->get(route('auth-page.reset-password', [
            'token' => Password::createToken($this->user),
            'email' => $this->user->email,
        ]))
        ->assertOk();
});
