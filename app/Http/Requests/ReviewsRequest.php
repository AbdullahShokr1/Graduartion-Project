<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReviewsRequest extends FormRequest
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
                'user_id' =>'required|unique:reviews',
                'product_id' =>'required',
                'comment' =>'nullable|string',
                'review' =>'nullable|max:5|min:1',
            ];
        }

        if ($this->getMethod() === 'PUT') {
            return [
                'user_id' =>['required', 'string', 'max:70'],
                'product_id' =>'required|',
                'comment' =>'nullable|string',
                'review' =>'required|string|max:5|min:1',
            ];
        }
    }
}
