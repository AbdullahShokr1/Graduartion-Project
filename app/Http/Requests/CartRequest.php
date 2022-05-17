<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CartRequest extends FormRequest
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
                'user_id' => 'required|exists:users,id',
                'product_id' => 'required|unique:carts|exists:products,id',
                'amount'=> 'required',
                'total_cost'=> 'required',
            ];
        }

        if ($this->getMethod() === 'PUT') {
            return [
                'user_id' => ['required'],
                'product_id' => ['required'],
                'amount'=> 'required',
                'total_cost'=> 'required',
            ];
        }
    }
}
