<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string|max:25',
            'content' => 'required|min:10|max:10000',
            'main_image' => 'required|file',
            'category_id' => 'required|exists:categories,id',
            'tag_ids' => 'required|nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'назва поста об\'язково повинна бути',
            'title.max' => 'назва поста не повинна бути більша за 15 символів',
            'content.required' => 'поле має бути заповнено content',
            'content.min' => 'поле content не повинно бути меншеим за 10 символів',
            'content.max' => 'поле content не повинно бути більшим за 10000 символів',
            'tag_ids.required' => 'Виберіть будь ласка теги',
            'category_id.required' => 'Виберіть будь ласка категорію'
        ];
    }
}
