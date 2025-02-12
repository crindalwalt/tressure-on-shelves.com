<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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

            "first_name" => ["required","string"],
            "last_name" => ["required","string"],
            "address" => ["required","string"],
            "address_2" => ["string"],
            "province" => ["required","string"],
            "postel_code" =>["required"],
            "total_cost" => ["required","string"],
            "product_id" => ["required"],
            "payment_method" => ["required","string"],
        ];
    }
}
