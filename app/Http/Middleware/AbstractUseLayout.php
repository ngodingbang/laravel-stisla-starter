<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

abstract class AbstractUseLayout
{
    /**
     * The default value of layout.
     *
     * @var string
     */
    public static $defaultLayout = 'default';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        Config::set('setting.layout', $this->getLayout());
        Session::put(['layout' => $this->getLayout()]);

        return $next($request);
    }

    /**
     * Return the specified value of layout.
     *
     * @return string
     */
    protected function getLayout(): string
    {
        if (property_exists($this, 'layout')) {
            return $this->layout;
        }

        if (method_exists($this, 'layout')) {
            return $this->layout();
        }

        return static::$defaultLayout;
    }
}
