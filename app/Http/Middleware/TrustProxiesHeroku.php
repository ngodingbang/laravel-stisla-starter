<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

/**
 * Custom trust proxy configuration if this application
 * is hosted at heroku.
 *
 * @see https://devcenter.heroku.com/articles/getting-started-with-laravel#trusting-the-load-balancer
 */
class TrustProxiesHeroku extends Middleware
{
    /**
     * {@inheritDoc}
     *
     * @var array<int, string>|string|null
     */
    protected $proxies = '*';

    /**
     * {@inheritDoc}
     */
    protected $headers = Request::HEADER_X_FORWARDED_AWS_ELB;
}
