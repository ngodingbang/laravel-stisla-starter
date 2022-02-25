<?php

namespace App\Models\Concerns\User;

use App\Models\Achievement;
use App\Models\Branch;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;

/**
 * @property-read \Illuminate\Database\Eloquent\Collection<\App\Models\Role> $roles
 *
 * @see \App\Models\User
 */
trait Relation
{
    use HasRoles;

    /**
     * Return \App\Models\Branch model relation value.
     *
     * @return \App\Models\Branch|null
     */
    public function getBranchRelationValue(): ?Branch
    {
        return $this->getRelationValue('branch');
    }

    /**
     * Define a one-to-many relationship with \App\Models\Achievement.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function achievements(): HasMany
    {
        return $this->hasMany(Achievement::class, 'achieved_by');
    }
}
