<?php

namespace App\Http\Requests;

use App\User;
use App\Rules\UniqueEmail;
use App\Rules\StrongPassword;
use App\Rules\ValidPhoneNumber;
use App\Rules\UniquePhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'name'                  => ['required', 'string', 'max:255'], 
            'email'                 => ['required', 'email', 'max:255', new UniqueEmail], 
            'phone_no'              => ['required', 'max:11', new UniquePhoneNumber, new ValidPhoneNumber],
            'gender'                => ['required', 'string'],
            'password'              => ['required', 'string', 'confirmed', new StrongPassword],
            'password_confirmation' => ['required', 'string']
        ];
    }
}
