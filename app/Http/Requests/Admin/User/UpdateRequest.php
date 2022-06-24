<?php

namespace App\Http\Requests\Admin\User;

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
            'name' => 'required|string|min:4|max:10|unique:users,name,' . $this->user_id,
            'user_id' => 'required|exists:users,id',
            'role' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'поле має бути заповнено',
            'name.string' => 'поле має бути string',
            'name.max' => 'поле має бути не більше 10 символів',
            'name.min' => 'поле має бути не менше 4 символів',
            'name.unique' => 'такий нейм уже є в базі данних',
            'role.required' => 'виберіть роль',
        ];
    }
}
