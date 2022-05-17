<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class More_InfoRequest extends FormRequest
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
        if ($this->getMethod() === 'POST') {
            return [
                'first_name' => 'nullable|string|max:70',
                'last_name' => 'nullable|string|max:155',
                'phone' => 'nullable',
                'address' => 'nullable',
                'city' => 'nullable|string|max:50',
                'state' => 'nullable|string|max:70',
                'zip_code' => 'nullable|string|max:155',
                'user_id' => 'required|unique:moreinfos',
            ];
        }

        if ($this->getMethod() === 'PUT') {
            return [
                'first_name' => 'nullable|string|max:70',
                'last_name' => 'nullable|string|max:155',
                'phone' => 'nullable',
                'address' => 'nullable',
                'city' => 'nullable|string|max:50',
                'state' => 'nullable|string|max:70',
                'zip_code' => 'nullable|string|max:155',
                'user_id' => 'required'
            ];
        }
    }
}
