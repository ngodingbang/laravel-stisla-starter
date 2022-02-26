<?php

namespace App\Infrastructure\Auth\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPasswordQueued extends ResetPassword implements ShouldQueue
{
    use Queueable;
}
