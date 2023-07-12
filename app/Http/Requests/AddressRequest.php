<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
      /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        $usertype = Auth()->user()->usertype;
        if ($usertype == 'admin') {
            return true;
        }
    return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id'=>'required|string',
            'addresse_livraison'=>'required|string',
            'addresse_facturation'=>'required|string',
            'phone_number'=>'required|string',
        ];
    }
}
