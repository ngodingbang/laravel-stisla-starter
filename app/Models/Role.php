<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role as BaseRole;

/**
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class Role extends BaseRole implements Concerns\Role\Attribute
{
    use HasFactory;

    /**
     * {@inheritDoc}
     */
    protected $fillable = [
        'name',
        'guard_name',
    ];

    /**
     * Return list of role based on the authenticated user.
     *
     * @return string[]
     */
    public static function getRoles(): array
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $roles = static::ROLES;

        if ($user->hasRole(static::ROLE_STAFF)) {
            $roles = Arr::except($roles, static::ROLE_ADMIN);
        }

        return $roles;
    }
}
