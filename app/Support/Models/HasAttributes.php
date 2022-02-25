<?php

namespace App\Support\Models;

use DomainException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Arr;
use InvalidArgumentException;

/**
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
trait HasAttributes
{
    /**
     * Determine if the model relation value has been modified.
     *
     * @param  array|string|null  $relations
     * @return bool
     *
     * @throws \InvalidArgumentException
     */
    public function isRelationValueDirty($relations = null): bool
    {
        $attributes = array_map(function ($name) {
            $relation = $this->$name();

            if (!$relation instanceof Relation || !method_exists($relation, 'getForeignKeyName')) {
                throw new InvalidArgumentException(sprintf(
                    'The given relation name %s on model class %s must return a relationship instance and has getForeignKeyName() method.',
                    $name, static::class
                ));
            }

            return $relation->getForeignKeyName();
        }, is_array($relations) ? $relations : func_get_args());

        return $this->isDirty($attributes);
    }

    /**
     * Determine whether the given model collection is valid with the given class name.
     *
     * @param  \Illuminate\Database\Eloquent\Collection<\Illuminate\Database\Eloquent\Model>  $models
     * @param  string  $className
     * @param  bool  $throwExceptionWhenNotValid
     * @return bool
     *
     * @throws \DomainException
     */
    protected function isCollectionValid(Collection $models, string $className, bool $throwExceptionWhenNotValid = true): bool
    {
        return $models->every(function (Model $model) use ($className, $throwExceptionWhenNotValid) {
            $isValid = $model instanceof $className;

            if (!$isValid && $throwExceptionWhenNotValid) {
                throw new DomainException(sprintf(
                    'Invalid %s model type, %s given', $className, get_class($model)
                ));
            }

            return $isValid;
        });
    }

    /**
     * Return collection value from specified model relation.
     *
     * @param  string  $key
     * @param  string  $className
     * @return \Illuminate\Database\Eloquent\Collection<\Illuminate\Database\Eloquent\Model>
     *
     * @throws \DomainException
     */
    public function getCollectionValue(string $key, string $className): Collection
    {
        $this->isCollectionValid($models = $this->getRelationValue($key), $className);

        return $models;
    }

    /**
     * Get the model's raw values from $attributes.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed|array
     */
    public function getRawAttribute($key = null, $default = null)
    {
        return Arr::get($this->getAttributes(), $key, $default);
    }
}
