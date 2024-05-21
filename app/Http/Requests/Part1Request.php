<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Part1Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required|max:191',
            'hp' => 'required|max:13',
            'alamat' => 'required|max:191',
            'tanggal' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nama.max' => 'nama tidak boleh melebihi 191 karakter',
            'hp.max' => 'no HP tidak boleh melebihi 13 karakter',
            'alamat' => 'alamat tidak boleh melebihi 191 karakter',

        ];
    }
}
