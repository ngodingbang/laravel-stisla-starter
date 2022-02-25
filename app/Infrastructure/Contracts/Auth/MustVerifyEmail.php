<?php

namespace App\Infrastructure\Contracts\Auth;

use Illuminate\Contracts\Auth\MustVerifyEmail as BaseMustVerifyEmail;

interface MustVerifyEmail extends BaseMustVerifyEmail
{
    /**
     * Get the key attribute name that should be used for verification.
     *
     * @return string
     */
    public function getKeyForVerification();
}
