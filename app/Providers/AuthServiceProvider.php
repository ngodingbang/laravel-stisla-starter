<?php

namespace App\Providers;

use App\Infrastructure\Contracts\Auth\HasRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $this->defineGate();
    }

    /**
     * Set gate policy definition.
     *
     * @return void
     */
    protected function defineGate()
    {
        Gate::before(function (HasRole $user, $ability, array $models) {
            if ($user->isAdmin()) {
                if (in_array($ability, ['delete', 'forceDelete'])) {
                    $model = head($models);

                    if ($model instanceof Model && $model->is($user)) {
                        return false;
                    }
                }

                return true;
            }
        });
    }
}
