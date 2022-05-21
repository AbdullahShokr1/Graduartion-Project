<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
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
                'title' => 'required|string|max:70|unique:products',
                'describe' => 'required|string|max:155',
                'price' => 'required|string|max:20000',
                'writer_id' => 'required|exists:admins,id',
                'photo' => 'required',
                'offer' => 'nullable',
                'glassesModel' => 'required',
            ];
        }

        if ($this->getMethod() === 'PUT') {
            return [
                'title' => ['required', 'string', 'max:70', Rule::unique('products')->ignore($this->product->id)],
                'describe' => ['required','string','max:155'],
                'price' => ['required','string','max:20000'],
                'writer_id' => ['required','exists:admins,id'],
                'photo' =>  ['required'],
                'offer' =>  ['nullable'],
                'glassesModel' =>  ['required'],
            ];
        }
    }
}
