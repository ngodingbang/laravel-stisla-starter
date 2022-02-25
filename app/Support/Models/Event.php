<?php

namespace App\Support\Models;

/**
 * @method static void retrieved(\Closure|string $callback) Register a retrieved model event with the dispatcher.
 * @method static void creating(\Closure|string $callback) Register a creating model event with the dispatcher.
 * @method static void created(\Closure|string $callback) Register a created model event with the dispatcher.
 * @method static void updating(\Closure|string $callback) Register a updating model event with the dispatcher.
 * @method static void updated(\Closure|string $callback) Register a updated model event with the dispatcher.
 * @method static void saving(\Closure|string $callback) Register a saving model event with the dispatcher.
 * @method static void saved(\Closure|string $callback) Register a saved model event with the dispatcher.
 * @method static void restoring(\Closure|string $callback) Register a restoring model event with the dispatcher.
 * @method static void restored(\Closure|string $callback) Register a restored model event with the dispatcher.
 * @method static void replicating(\Closure|string $callback) Register a replicating model event with the dispatcher.
 * @method static void deleting(\Closure|string $callback) Register a deleting model event with the dispatcher.
 * @method static void deleted(\Closure|string $callback) Register a deleted model event with the dispatcher.
 *
 * @see \Illuminate\Database\Eloquent\Concerns\HasEvents
 */
trait Event
{
    /**
     * Register a forceDeleted model event with the dispatcher.
     *
     * @param  \Closure|string  $callback
     * @return void
     */
    public static function forceDeleted($callback)
    {
        static::registerModelEvent('forceDeleted', $callback);
    }
}
