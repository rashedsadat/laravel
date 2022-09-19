<?php

namespace App\Http\Requests;

use App\Rules\IsEmailExists;
use App\Rules\StrongPassword;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        return [
            'email'   => ['required','email', new IsEmailExists],
            'password' => ['required', new StrongPassword],
        ];
    }

    public function messages()
    {
        return[
            'email.required' => 'Sorry! We could not find you',
        ];
    }
}
