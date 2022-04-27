<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
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
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable',
                'subject' => 'required|string|max:50',
                'message' => 'required|string',
            ];
        }

        if ($this->getMethod() === 'PUT') {
            return [
                'name' => 'required|string|max:255',
                'email' => ['required', 'email', 'max:255'],
                'password' => 'nullable|min:6',
                'phone' => 'nullable',
                'subject' => 'required|string|max:50',
                'message' => 'required|string|max:300',
            ];
        }
    }
}
