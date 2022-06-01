<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OrderRequest extends FormRequest
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
                'status'=> 'required',
                'shopping_id'=>  ['required', Rule::unique('orders')],
                'user_id'=>'nullable',
                'product_id'=>'required'
            ];
        }

        if ($this->getMethod() === 'PUT') {
            return [
                'status'=> 'required',
                'shopping_id' => ['required', Rule::unique('orders')],
                'user_id'=>'nullable',
                'product_id'=>'required'
            ];
        }
    }
}
