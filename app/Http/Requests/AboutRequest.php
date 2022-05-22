<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AboutRequest extends FormRequest
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
                'name' => 'required|string|max:60',
                'email' => 'required|email|max:255|unique:abouts',
                'role' => 'required|',
                'des' => 'required|',
                'photo' => 'nullable',
            ];
        }

        if ($this->getMethod() === 'PUT') {
            return [
                'name' => 'required|string|max:60',
                'email' => ['required', 'email', 'max:255', Rule::unique('abouts')->ignore($this->about->id)],
                'role' => 'required|max:60',
                'des' => 'required|max:60',
                'photo' =>  ['nullable'],
            ];
        }
    }
}
