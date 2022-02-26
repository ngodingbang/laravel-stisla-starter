<?php

namespace App\Infrastructure\Contracts\Auth;

interface HasRole
{
    /**
     * Determine if the user has the role of "admin".
     *
     * @return bool
     */
    public function isAdmin(): bool;

    /**
     * Determine if the user has the role of "manager".
     *
     * @return bool
     */
    public function isManager(): bool;

    /**
     * Determine if the user has the role of "staff".
     *
     * @return bool
     */
    public function isStaff(): bool;
}
