<?php

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = pest_create_random_user();
});

it('has features activities page', function () {
    actingAs($this->user)
        ->get(route('features.activities'))
        ->assertOk();
});

it('has features post-create page', function () {
    actingAs($this->user)
        ->get(route('features.post-create'))
        ->assertOk();
});

it('has features posts page', function () {
    actingAs($this->user)
        ->get(route('features.posts'))
        ->assertOk();
});

it('has features settings page', function () {
    actingAs($this->user)
        ->get(route('features.settings'))
        ->assertOk();
});

it('has features setting-detail page', function () {
    actingAs($this->user)
        ->get(route('features.setting-detail'))
        ->assertOk();
});

it('has features tickets page', function () {
    actingAs($this->user)
        ->get(route('features.tickets'))
        ->assertOk();
});
