<?php

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = pest_create_random_user();
});

it('has layout default page', function () {
    actingAs($this->user)
        ->get(route('layout.default'))
        ->assertOk();
});

it('has layout transparent page', function () {
    actingAs($this->user)
        ->get(route('layout.transparent'))
        ->assertOk();
});

it('has layout top-navigation page', function () {
    actingAs($this->user)
        ->get(route('layout.top-navigation'))
        ->assertOk();
});
