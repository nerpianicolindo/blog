<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
        return [
            'name_user' => 'required | min:3',
            'comment' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name_user.required' => 'Leñe, pon el nombre de usuario',
            'name_user.min' => 'Escribe más alma de cantaro',
            'comment.required' => 'Leñe, escribe algún comentario'
        ];
    }
}
