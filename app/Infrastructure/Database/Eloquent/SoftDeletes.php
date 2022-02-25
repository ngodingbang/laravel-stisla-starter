<?php

namespace App\Infrastructure\Database\Eloquent;

use Illuminate\Database\Eloquent\SoftDeletes as BaseSoftDeletes;

/**
 * @property \Illuminate\Support\Carbon $deleted_at
 */
trait SoftDeletes
{
    use BaseSoftDeletes;
}
