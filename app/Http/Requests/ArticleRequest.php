<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'nome' => 'required',
            'marca' => 'required',
            'costo' => 'required',
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Il campo Nome è richiesto',
            'marca.required' => 'Il campo Marca è richiesto',
            'costo.required' => 'Il campo Costo è richiesto'
        ];
    }
}
