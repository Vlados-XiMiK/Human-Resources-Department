<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'main_image' => 'required|file',
            'category_id' => 'required|exists:categories,id',

        ];
    }

    public function messages()
    {
        return [
            'title.required'=> 'Це поле необхідно заповнити',
            'title.string'=> 'Дані повинні відповідати рядковому типу',
            'content.required'=> 'Це поле необхідно заповнити',
            'content.string'=> 'Дані повинні відповідати рядковому типу',
            'main_image.required'=> 'Необхідно вибрати файл',
            'main_image.file'=> 'Необхідно вибрати файл',
            'category_id.required'=> 'Це поле необхідно заповнити',
            'category_id.integer'=> 'ID категорії повинно бути числовим',
            'category_id.exists'=> 'ID категорії повинно бути в базі данних',
        ];
    }
}
