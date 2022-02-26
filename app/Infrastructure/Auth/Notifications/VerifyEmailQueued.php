<?php

namespace App\Infrastructure\Auth\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as BaseVerifyEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class VerifyEmailQueued extends BaseVerifyEmail implements ShouldQueue
{
    use Queueable;

    /**
     * {@inheritDoc}
     */
    protected function verificationUrl($notifiable)
    {
        return URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => sha1($notifiable->getKeyForVerification()),
                'hash' => sha1($notifiable->getEmailForVerification()),
            ]
        );
    }
}
