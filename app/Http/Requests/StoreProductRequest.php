<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            "product_name" => ['required',"string"],
            "product_description" => ['required','string'],
            "price" => ['required',"max_digits:11","min_digits:2"],
            "old_price" => ['required'],
            "category_id" => ['required'],
            "product_image" => ["required","mimes:jpg,png,jpeg"],
        ];
    }
}
