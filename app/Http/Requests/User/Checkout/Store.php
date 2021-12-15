<?php

namespace App\Http\Requests\User\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    { 
        return [
            'email' => 'required|email|unique:users,email,'.Auth::id().',id',
            'name' => 'required|string',
            'occupation' => 'required',
            'handphone_number' => 'required|string',
        ];
    }
}
