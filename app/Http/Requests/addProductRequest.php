<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class addProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $usertype = Auth()->user()->usertype;
        if ($usertype=='admin') {
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
            'name'=>'required',
            'price'=>'required|min:100',
            'image'=>'required',
            'oneliner'=>'required',
            'description'=>'required',
            'stock'=>'required|min:0',

        ];
    }
}
