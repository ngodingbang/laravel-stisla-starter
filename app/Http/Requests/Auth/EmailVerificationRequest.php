<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Auth\EmailVerificationRequest as BaseEmailVerificationRequest;

/**
 * @method \App\Models\User|null user() Get the user making the request.
 */
class EmailVerificationRequest extends BaseEmailVerificationRequest
{
    /**
     * {@inheritDoc}
     */
    public function authorize()
    {
        if (! hash_equals(
            (string) $this->route('id'),
            sha1($this->user()->getKeyForVerification()
        ))) {
            return false;
        }

        if (! hash_equals(
            (string) $this->route('hash'),
            sha1($this->user()->getEmailForVerification()
        ))) {
            return false;
        }

        return true;
    }
}
