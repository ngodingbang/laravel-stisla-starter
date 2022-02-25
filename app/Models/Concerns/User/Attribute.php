<?php

namespace App\Models\Concerns\User;

use Illuminate\Support\Facades\Hash;

/**
 * @property string $username
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon $email_verified_at
 * @property string $password
 * @property-read string $remember_token
 * @property-read string $role
 * @property-read string $profile_image
 *
 * @see \App\Models\User
 */
trait Attribute
{
    /**
     * Set "password" attribute value.
     *
     * @param  mixed  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);

        return $this;
    }

    /**
     * Return "role" attribute value.
     *
     * @return string
     */
    public function getRoleAttribute(): string
    {
        $this->load('roles:id,name');

        return $this->roles->first()->name;
    }

    /**
     * Return "profile_image" attribute value.
     *
     * @return string
     */
    public function getProfileImageAttribute(): string
    {
        return gravatar_image($this->email);
    }
}
