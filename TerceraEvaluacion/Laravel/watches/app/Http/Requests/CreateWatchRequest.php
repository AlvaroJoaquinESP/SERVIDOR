<?php

namespace App\Http\Requests;

use App\Enums\WatchBrand;
use App\Enums\WatchType;
use App\Helpers\ApiResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use Illuminate\Validation\Rules\Enum;

class CreateWatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

     // SI PONGO ESTE MÉTODO, AL CREAR PUEDE DAR ERROR DE UNAUTHORIZED.
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
            'model' => 'required|string|max:255',
            'brand' => ['required', 'string', new Enum(WatchBrand::class)],
            'type' => ['required', 'string', new Enum(WatchType::class)]
        ];
    }


    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(ApiResponse::error($validator->errors(),"Error Validator", Response::HTTP_UNPROCESSABLE_ENTITY/* 422 */));
    }
}
