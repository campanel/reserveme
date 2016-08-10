<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SalaRequest extends Request
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
        //dd($this->method());
        $sala = $this->route('salas');

        if ($this->method() == 'PUT' || $this->method() == 'PATCH')
        {
            // Update
            $nomeRule = 'required|min:3|unique:salas,id,'.$sala->id;
        }
        else
        {
            // Create
            $nomeRule = 'required|min:3|unique:salas';
        }

        return [
            'nome' => $nomeRule,
        ];

    }
}
