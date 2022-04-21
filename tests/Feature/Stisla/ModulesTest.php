<?php

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = pest_create_random_user();
});

it('has modules calendar page', function () {
    actingAs($this->user)
        ->get(route('modules.calendar'))
        ->assertOk();
});

it('has modules chartjs page', function () {
    actingAs($this->user)
        ->get(route('modules.chartjs'))
        ->assertOk();
});

it('has modules datatables page', function () {
    actingAs($this->user)
        ->get(route('modules.datatables'))
        ->assertOk();
});

it('has modules flag page', function () {
    actingAs($this->user)
        ->get(route('modules.flag'))
        ->assertOk();
});

it('has modules font-awesome page', function () {
    actingAs($this->user)
        ->get(route('modules.font-awesome'))
        ->assertOk();
});

it('has modules ion-icons page', function () {
    actingAs($this->user)
        ->get(route('modules.ion-icons'))
        ->assertOk();
});

it('has modules owl-carousel page', function () {
    actingAs($this->user)
        ->get(route('modules.owl-carousel'))
        ->assertOk();
});

it('has modules sparkline page', function () {
    actingAs($this->user)
        ->get(route('modules.sparkline'))
        ->assertOk();
});

it('has modules sweet-alert page', function () {
    actingAs($this->user)
        ->get(route('modules.sweet-alert'))
        ->assertOk();
});

it('has modules toastr page', function () {
    actingAs($this->user)
        ->get(route('modules.toastr'))
        ->assertOk();
});

it('has modules vector-map page', function () {
    actingAs($this->user)
        ->get(route('modules.vector-map'))
        ->assertOk();
});

it('has modules weather-icon page', function () {
    actingAs($this->user)
        ->get(route('modules.weather-icon'))
        ->assertOk();
});
