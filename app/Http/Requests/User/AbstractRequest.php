<?php

namespace App\Http\Requests\User;

use App\Infrastructure\Foundation\Http\FormRequest;

abstract class AbstractRequest extends FormRequest
{
    /**
     * {@inheritDoc}
     */
    public function authorize()
    {
        return !is_null($this->user());
    }

    /**
     * {@inheritDoc}
     */
    public function attributes()
    {
        return [
            'username' => trans('Username'),
            'name' => trans('Name'),
            'email' => trans('Email'),
            'role' => trans('Role'),
        ];
    }
}
