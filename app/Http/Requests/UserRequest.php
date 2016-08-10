<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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

        $user = $this->route('users');

        if ($this->method() == 'PUT' || $this->method() == 'PATCH')
        {
            // Update
            $emailRule = 'required|email|unique:users,id,'.$user->id;
        }
        else
        {
            // Create
            $emailRule = 'required|email|unique:users';
        }

        return [
            'username' => 'required|min:3',
            'password' => 'required|min:3',
            'email' => $emailRule
        ];
    }
}
