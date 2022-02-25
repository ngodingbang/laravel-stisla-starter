<?php

namespace App\Infrastructure\Foundation\Http;

use Illuminate\Contracts\Validation\Validator as ValidationFactory;
use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

/**
 * @method \App\Models\User|null user() Get the user making the request.
 */
abstract class FormRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return static::getRules();
    }

    /**
     * Get the validation rules that apply to the request in static way.
     *
     * @return array
     */
    public static function getRules()
    {
        return [
            //
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function attributes()
    {
        return static::getAttributes();
    }

    /**
     * Get custom attributes for validator errors in static way.
     *
     * @return array
     */
    public static function getAttributes()
    {
        return [
            //
        ];
    }

    /**
     * Create the validator instance based on the given field name.
     *
     * @param  mixed  $data
     * @param  string  $field
     * @param  array  $messages
     * @param  bool  $stopOnFirstFailure
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function createValidator($data, string $field, array $messages = [], bool $stopOnFirstFailure = false): ValidationFactory
    {
        return Validator::make(
            [$field => $data],
            Arr::only(static::getRules(), $field),
            $messages,
            Arr::only(static::getAttributes(), $field)
        )->stopOnFirstFailure($stopOnFirstFailure);
    }
}
