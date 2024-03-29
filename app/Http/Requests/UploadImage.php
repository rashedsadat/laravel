<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadImage extends FormRequest
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
            'avatar' => ['nullable', 'image', 'mimes:jpg, jpeg, png, svg, webp'],
        ];
    }

    public function messages()
    {
        return[
            'avare.mimes' => 'Only allow jpg, jpeg, png, svg, webp',
        ];
    }
}
