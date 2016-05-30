<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RoleUpdateRequest extends Request
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
            'name'=>'required|unique:roles,name,'.$this->get('id').'|max:255',
            'display_name'=>'unique:roles,display_name,'.$this->get('id').'|max:255',
        ];
    }
}
