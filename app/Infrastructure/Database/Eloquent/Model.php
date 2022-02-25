<?php

namespace App\Infrastructure\Database\Eloquent;

use App\Support\Models\HasAttributes;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel
{
    use HasAttributes;

    /**
     * {@inheritDoc}
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
