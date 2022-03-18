<?php

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = pest_create_random_user();
});

it('has dashboard general page', function () {
    actingAs($this->user)
        ->get(route('dashboard.general'))
        ->assertOk();
});

it('has dashboard ecommerce page', function () {
    actingAs($this->user)
        ->get(route('dashboard.ecommerce'))
        ->assertOk();
});
