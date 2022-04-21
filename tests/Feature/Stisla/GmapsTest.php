<?php

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = pest_create_random_user();
});

it('has gmaps advanced-route page', function () {
    actingAs($this->user)
        ->get(route('gmaps.advanced-route'))
        ->assertOk();
});

it('has gmaps draggable-marker page', function () {
    actingAs($this->user)
        ->get(route('gmaps.draggable-marker'))
        ->assertOk();
});

it('has gmaps geocoding page', function () {
    actingAs($this->user)
        ->get(route('gmaps.geocoding'))
        ->assertOk();
});

it('has gmaps geolocation page', function () {
    actingAs($this->user)
        ->get(route('gmaps.geolocation'))
        ->assertOk();
});

it('has gmaps marker page', function () {
    actingAs($this->user)
        ->get(route('gmaps.marker'))
        ->assertOk();
});

it('has gmaps multiple-marker page', function () {
    actingAs($this->user)
        ->get(route('gmaps.multiple-marker'))
        ->assertOk();
});

it('has gmaps route page', function () {
    actingAs($this->user)
        ->get(route('gmaps.route'))
        ->assertOk();
});

it('has gmaps simple page', function () {
    actingAs($this->user)
        ->get(route('gmaps.simple'))
        ->assertOk();
});
