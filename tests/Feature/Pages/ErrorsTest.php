<?php

use Illuminate\Http\Response;

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = pest_create_random_user();
});

it('has errors 401 page', function () {
    actingAs($this->user)
        ->get(route('errors.401'))
        ->assertUnauthorized();
});

it('has errors 403 page', function () {
    actingAs($this->user)
        ->get(route('errors.403'))
        ->assertForbidden();
});

it('has errors 404 page', function () {
    actingAs($this->user)
        ->get(route('errors.404'))
        ->assertNotFound();
});

it('has errors 419 page', function () {
    actingAs($this->user)
        ->get(route('errors.419'))
        ->assertStatus(419);
});

it('has errors 429 page', function () {
    actingAs($this->user)
        ->get(route('errors.429'))
        ->assertStatus(Response::HTTP_TOO_MANY_REQUESTS);
});

it('has errors 500 page', function () {
    actingAs($this->user)
        ->get(route('errors.500'))
        ->assertStatus(Response::HTTP_INTERNAL_SERVER_ERROR);
});

it('has errors 503 page', function () {
    actingAs($this->user)
        ->get(route('errors.503'))
        ->assertStatus(Response::HTTP_SERVICE_UNAVAILABLE);
});
