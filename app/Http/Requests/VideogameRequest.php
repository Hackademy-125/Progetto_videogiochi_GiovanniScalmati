<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideogameRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title"=>'required',
            "year"=>'max_digits:4',
            "author"=>'required',
            "description"=>'required'
    
        ];
    }

public function messages():array{

return[

    "title.required"  => "Ricordati di inserire il titolo",
    "year.numeric"  => "Non siamo nell'antica Roma, gli anni vanno con i numeri",
    "year.max_digits"  => "Non puoi inserire più di 4 caratteri",
    "title.required"  => "Ricordati di inserire il titolo"


];

    }

}

