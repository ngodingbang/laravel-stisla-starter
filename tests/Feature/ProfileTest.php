<?php

use App\Models\User;
use Illuminate\Support\Arr;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseHas;

beforeEach(function () {
    $this->user = pest_create_random_user();
});

it('has profile edit page', function () {
    actingAs($this->user)
        ->get(route('profile.edit'))
        ->assertOk();
});

it('can update profile', function () {
    $data = Arr::except(User::factory()->rawForm(), 'role');

    actingAs($this->user)
        ->put(route('profile.update'), $data)
        ->assertRedirect(route('profile.edit'));

    assertDatabaseHas(User::class, Arr::only($data, 'username'));
});
