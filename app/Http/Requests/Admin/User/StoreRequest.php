<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|min:4|max:10|unique:users',
            'password' => 'required|string|min:5',
            'password1' => 'required|string|min:5',
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
            'password.required' => 'перше поле паролю повинно бути заповнено',
            'password.min' => 'перше поле паролю повинно бути не менше 5 символів',
            'password1.required' => 'друге поле паролю повинно бути заповнено',
            'password1.min' => 'друге поле паролю повинно бути не менше 5 символів',
            'role.required' => 'виберіть роль',
        ];
    }
}
