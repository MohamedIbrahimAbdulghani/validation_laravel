<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // to make this request done must be change the return from false to true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title"=>"required|min:3",
            "body"=>"required"
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Please, Enter Title", 
            "title.min" => "Must Write More Than 3 Letters In Title",
            "body.required" => "Please, Enter Body"
        ];
    }
}
