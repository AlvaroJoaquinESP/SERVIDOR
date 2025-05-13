<?php

namespace App\Http\Requests;

use App\Enums\SaleStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CreateSaleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'status' => ['required', 'string', new Enum(SaleStatus::values())],
            'amount' => 'required|numeric|min:0.01',
            'sale_date' => 'required|date',
            'seller_id' => 'required|numeric|min:1',
            'client_id' => 'required|numeric|min:1',
            'car_id' => 'required|numeric|min:1'
        ];
    }
}
