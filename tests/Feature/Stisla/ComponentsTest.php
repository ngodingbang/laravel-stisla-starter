<?php

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = pest_create_random_user();
});

it('has components article page', function () {
    actingAs($this->user)
        ->get(route('components.article'))
        ->assertOk();
});

it('has components avatar page', function () {
    actingAs($this->user)
        ->get(route('components.avatar'))
        ->assertOk();
});

it('has components chat-box page', function () {
    actingAs($this->user)
        ->get(route('components.chat-box'))
        ->assertOk();
});

it('has components empty-state page', function () {
    actingAs($this->user)
        ->get(route('components.empty-state'))
        ->assertOk();
});

it('has components gallery page', function () {
    actingAs($this->user)
        ->get(route('components.gallery'))
        ->assertOk();
});

it('has components hero page', function () {
    actingAs($this->user)
        ->get(route('components.hero'))
        ->assertOk();
});

it('has components multiple-upload page', function () {
    actingAs($this->user)
        ->get(route('components.multiple-upload'))
        ->assertOk();
});

it('has components pricing page', function () {
    actingAs($this->user)
        ->get(route('components.pricing'))
        ->assertOk();
});

it('has components statistic page', function () {
    actingAs($this->user)
        ->get(route('components.statistic'))
        ->assertOk();
});

it('has components tab page', function () {
    actingAs($this->user)
        ->get(route('components.tab'))
        ->assertOk();
});

it('has components table page', function () {
    actingAs($this->user)
        ->get(route('components.table'))
        ->assertOk();
});

it('has components user page', function () {
    actingAs($this->user)
        ->get(route('components.user'))
        ->assertOk();
});

it('has components wizard page', function () {
    actingAs($this->user)
        ->get(route('components.wizard'))
        ->assertOk();
});
