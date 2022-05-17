<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShomeRequest extends FormRequest
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
            'logo' => 'nullable',
            'banner' => 'required|string|max:70',
            'banner_description' => 'required|string|max:155',
            'banner_photo' => 'nullable',
            'banner1' => 'required|string|max:70',
            'banner1_description' => 'required|string|max:155',
            'banner1_photo' => 'nullable',
            'social1' => 'required|string|max:200',
            'social2' => 'required|string|max:200',
            'social3' => 'required|string|max:200',
            'social4' => 'required|string|max:200',

        ];
    }
}
