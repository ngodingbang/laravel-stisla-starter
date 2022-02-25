<?php

namespace App\Support\Auth;

use Illuminate\Auth\MustVerifyEmail as BaseMustVerifyEmail;

trait MustVerifyEmail
{
    use BaseMustVerifyEmail;

    /**
     * Get the key attribute name that should be used for verification.
     *
     * @return string
     */
    public function getKeyForVerification()
    {
        return $this->username;
    }
}
