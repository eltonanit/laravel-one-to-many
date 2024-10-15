<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(){
        return [
            'name' => 'required|max:200',
            'image' => 'nullable|image|max:4084',
            'summary' => 'nullable'
        ];
    }
    public function messages(){
        return [
            "name.required" => "Il nome del progetto è obbligatorio",
            "name.max" => "Il nome del progetto deve essere lungo al massimo :max caratteri",
            "image.image" => "Il file deve essere un'immagine valida",
            "image.max" => "Il file deve essere grande al massimo :max kb"
        ];
    }
}
