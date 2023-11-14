<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
        $method = $this->method();

        if($method == 'PUT'){

            return [
                'bioid'            => 'required',
                'name'             => 'required',
                'position'         => 'required',
                'rate'             => 'required',
                'cola'             => 'required',
                'department'       => 'required',
                'subdepartment'    => 'required',
                'subsubdepartment' => 'required',
                'dm'               => 'required',
                ];

        }
        else{

            return [
                'bioid'            => ['required','sometimes'],
                'name'             => ['required','sometimes'],
                'position'         => ['required','sometimes'],
                'rate'             => ['required','sometimes'],
                'cola'             => ['required','sometimes'],
                'department'       => ['required','sometimes'],
                'subdepartment'    => ['required','sometimes'],
                'subsubdepartment' => ['required','sometimes'],
                'dm'               => ['required','sometimes']
                ];

        }
  
    }
}
