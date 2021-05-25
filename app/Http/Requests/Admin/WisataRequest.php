<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class WisataRequest extends FormRequest
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
            'nama_wisata' => 'required|max:255',
            'alamat' => 'required|max:255',
            'lokasi' => 'required',
            'jarak' => 'required|integer',
            'deskripsi' => 'required'
        ];
    }
}
