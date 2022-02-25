<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * {@inheritDoc}
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
