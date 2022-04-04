<?php

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = pest_create_random_user();
});

it('has boostrap alert page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.alert'))
        ->assertOk();
});

it('has boostrap badge page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.badge'))
        ->assertOk();
});

it('has boostrap breadcrumb page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.breadcrumb'))
        ->assertOk();
});

it('has boostrap buttons page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.buttons'))
        ->assertOk();
});

it('has boostrap card page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.card'))
        ->assertOk();
});

it('has boostrap carousel page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.carousel'))
        ->assertOk();
});

it('has boostrap collapse page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.collapse'))
        ->assertOk();
});

it('has boostrap dropdown page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.dropdown'))
        ->assertOk();
});

it('has boostrap form page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.form'))
        ->assertOk();
});

it('has boostrap list-group page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.list-group'))
        ->assertOk();
});

it('has boostrap media-object page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.media-object'))
        ->assertOk();
});

it('has boostrap modal page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.modal'))
        ->assertOk();
});

it('has boostrap nav page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.nav'))
        ->assertOk();
});

it('has boostrap navbar page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.navbar'))
        ->assertOk();
});

it('has boostrap pagination page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.pagination'))
        ->assertOk();
});

it('has boostrap popover page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.popover'))
        ->assertOk();
});

it('has boostrap progress page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.progress'))
        ->assertOk();
});

it('has boostrap table page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.table'))
        ->assertOk();
});

it('has boostrap tooltip page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.tooltip'))
        ->assertOk();
});

it('has boostrap typography page', function () {
    actingAs($this->user)
        ->get(route('bootstrap.typography'))
        ->assertOk();
});

