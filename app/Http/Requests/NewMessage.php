<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewMessage extends FormRequest
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
            'contact_id'   => 'required|integer',
            'msg_content'  => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
      return [
        'msg_content.required' => 'A message is required',
        'contact_id.required'  => 'A user id is required',
      ];
    }
}
