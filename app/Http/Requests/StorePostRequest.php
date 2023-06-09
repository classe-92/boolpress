<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:posts|max:150|min:3',
            'image' => 'nullable|max:255',
            'body' => 'nullable',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|exists:tags,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio!',
            'title.unique:posts' => 'Questo titolo esiste già!',
            'title.max' => 'Il titolo deve essere lungo massimo :max caratteri!',
            'title.min' => 'Il titolo deve essere lungo almeno :min caratteri!',
            'image.max' => 'La URL deve essere lungo massimo :max caratteri!'
        ];
    }
}