<?php

namespace App\Models;

use App\Infrastructure\Auth\Notifications\ResetPasswordQueued;
use App\Infrastructure\Auth\Notifications\VerifyEmailQueued;
use App\Infrastructure\Contracts\Auth\HasRole;
use App\Infrastructure\Contracts\Auth\MustVerifyEmail;
use App\Infrastructure\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static \Database\Factories\UserFactory<static> factory(callable|array|int|null $count = null, callable|array $state = []) Get a new factory instance for the model.
 */
class User extends Authenticatable implements HasRole, MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable,
        Concerns\User\Attribute,
        Concerns\User\Event,
        Concerns\User\Relation;

    /**
     * {@inheritDoc}
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
    ];

    /**
     * {@inheritDoc}
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * {@inheritDoc}
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * {@inheritDoc}
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmailQueued);
    }

    /**
     * {@inheritDoc}
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordQueued($token));
    }

    /**
     * {@inheritDoc}
     */
    public function isAdmin(): bool
    {
        return $this->hasRole(Role::ROLE_ADMIN);
    }

    /**
     * {@inheritDoc}
     */
    public function isManager(): bool
    {
        return $this->hasRole(Role::ROLE_MANAGER);
    }

    /**
     * {@inheritDoc}
     */
    public function isStaff(): bool
    {
        return $this->hasRole(Role::ROLE_STAFF);
    }
}
