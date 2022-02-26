<?php

namespace App\Models\Concerns\User;

use Spatie\Permission\Traits\HasRoles;

/**
 * @property-read \Illuminate\Database\Eloquent\Collection<\App\Models\Role> $roles
 *
 * @see \App\Models\User
 */
trait Relation
{
    use HasRoles;
}
