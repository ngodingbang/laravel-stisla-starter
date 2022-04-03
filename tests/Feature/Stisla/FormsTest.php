<?php

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = pest_create_random_user();
});

it('has forms advanced-form page', function () {
    actingAs($this->user)
        ->get(route('forms.advanced-form'))
        ->assertOk();
});

it('has forms editor page', function () {
    actingAs($this->user)
        ->get(route('forms.editor'))
        ->assertOk();
});

it('has forms validation page', function () {
    actingAs($this->user)
        ->get(route('forms.validation'))
        ->assertOk();
});
