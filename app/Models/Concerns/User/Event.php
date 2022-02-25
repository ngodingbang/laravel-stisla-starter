<?php

namespace App\Models\Concerns\User;

use App\Models\User;
use App\Support\Models\Event as ModelEvent;

/**
 * @see \App\Models\User
 */
trait Event
{
    use ModelEvent;

    /**
     * Boot the trait on the model.
     *
     * @return void
     */
    protected static function bootEvent()
    {
        static::deleting(function (User $model) {
            $model->roles->map->delete();
        });
    }
}
