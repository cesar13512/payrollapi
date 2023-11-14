<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
        'bioid'            => 'required',
        'name'             => 'required',
        'position'         => 'required',
        'rate'             => 'required',
        'cola'             => 'nullable',
        'department'       => 'required',
        'subdepartment'    => 'nullable',
        'subsubdepartment' => 'nullable',
        'dm'               => 'required',
        'assign'           => 'nullable',
        ];
    }
}
