<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;


class UpdateScheduleblocksRequest extends FormRequest
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
                'ontime'       => 'required',
                'offtime'      => 'required',
                'intime'       => 'required',
                'outtime'      => 'required'
                ];

        }
        else{

            return [
                'ontime'         => ['required','sometimes'],
                'offtime'        => ['required','sometimes'],
                'intime'         => ['required','sometimes'],
                'outtime'        => ['required','sometimes'],
                
                ];

        }

    }
}
