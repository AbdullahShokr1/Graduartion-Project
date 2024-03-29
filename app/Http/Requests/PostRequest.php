<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
                'title' => 'required|string|max:70|unique:posts',
                'description' => 'required|string|max:155',
                'keywords' => 'required|string|max:200',
                'mycontent' => 'required',
                'category_id' => 'required|exists:categories,id',
                'writer_id' => 'required|exists:admins,id',
                'slug' => 'required|string|max:50|unique:posts',
                'photo' => 'nullable',
            ];
        }

        if ($this->getMethod() === 'PUT') {
            return [
                'title' => ['required', 'string', 'max:70'],
                'description' => ['required','string','max:155'],
                'keywords' => ['required','string','max:200'],
                'mycontent' => ['required'],
                'category_id' => ['required','exists:categories,id'],
                'writer_id' => ['required','exists:admins,id'],
                'slug' => ['required','string','max:50'],
                'photo' => 'nullable',
            ];
        }
    }
}
