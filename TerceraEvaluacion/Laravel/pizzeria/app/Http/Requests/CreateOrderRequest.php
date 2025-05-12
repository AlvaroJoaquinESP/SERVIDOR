<?php

namespace App\Http\Requests;

use App\Helpers\ApiResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

/**
 * En caso de no poner el enum por defecto al crear.(Service).
 * use App\Enums\OrderStatus;
 * use Illuminate\Validation\Rules\Enum;
 */

class CreateOrderRequest extends FormRequest
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
            /**
             * 'status' => ['required','string', new Enum(OrderStatus::class)],
             * NO HACE FALTA, YA QUE POR DEFECTO DEBE DE SER CREATED, lo establezco en el service.
             * */'order_date' => 'required|date',
            'pizza_ids' => 'required|string|max:255',
            'delivery_id' => 'required|numeric|min:1'
        ];
    }


    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(ApiResponse::error($validator->errors(),"Error Validator", Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
