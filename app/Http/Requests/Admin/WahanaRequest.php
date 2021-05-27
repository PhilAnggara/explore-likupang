<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class WahanaRequest extends FormRequest
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
            'id_wisata' => 'required|integer|exists:wisata,id_wisata',
            'nama_wahana' => 'required|max:255',
            'harga' => 'required|integer',
            'gambara' => 'required|image',
            'gambarb' => 'required|image',
            'deskripsi' => 'required'
        ];
    }
}
