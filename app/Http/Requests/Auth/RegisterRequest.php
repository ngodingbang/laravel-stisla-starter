<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\User\StoreRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class RegisterRequest extends StoreRequest
{
    /**
     * {@inheritDoc}
     */
    public function authorize()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function rules()
    {
        return [
            'username' => ['required', 'string', 'max:255', Rule::unique(User::class)],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function attributes()
    {
        return array_merge(Arr::except(parent::attributes(), ['role']), [
            'agree_with_terms' => trans('Terms of Service'),
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function store(): User
    {
        /** @var \App\Models\User $user */
        $user = User::make([
            'username' => $this->input('username'),
            'name' => $this->input('name'),
            'email' => $this->input('email'),
            'password' => $this->input('password'),
        ]);

        $user->save();

        $user->syncRoles(Role::ROLE_STAFF);

        return $user;
    }
}
