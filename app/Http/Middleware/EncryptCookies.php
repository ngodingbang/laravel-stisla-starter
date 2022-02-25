<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
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
