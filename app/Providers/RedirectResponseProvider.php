<?php

namespace App\Providers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\ServiceProvider;

class RedirectResponseProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        RedirectResponse::macro('withAlert', function (string $type, string $message) {
            /** @var \Illuminate\Http\RedirectResponse $redirectResponse */
            $redirectResponse = $this;

            $type = 'alert-' . $type;
            $alert = compact('type', 'message');

            return $redirectResponse->with(compact('alert'));
        });

        RedirectResponse::macro('withAlertSuccess', function (string $message) {
            /** @var \Illuminate\Http\RedirectResponse $redirectResponse */
            $redirectResponse = $this;

            return $redirectResponse->withAlert('success', $message);
        });
    }
}
