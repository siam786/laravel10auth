<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;


class RegisterStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'bail|string|max:255',
            'email'=> 'bail|string|email|max:255|unique:users',
            'phone'=> 'bail|required|string',
            'password'=> ['bail','required','string','confirmed',Password::min(4)->mixedCase()],
        ];
    }
    
}
