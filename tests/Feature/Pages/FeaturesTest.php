<?php

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = pest_create_random_user();
});

it('has features tickets page', function () {
    actingAs($this->user)
        ->get(route('features.tickets'))
        ->assertOk();
});
