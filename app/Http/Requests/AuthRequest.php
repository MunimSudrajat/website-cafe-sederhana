<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'name' => 'required|max:20',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:users',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama harus diisi!',
            'name.max' => 'Nama tidak boleh lebih dari 20',
            'password.required' => 'Password tidak boleh kosong!',
            'password.confirmed' => 'Konfirmasi password tidak sama!',
            'email.required' => 'Email tidak boleh kosong!',
            'email.email' => 'Yang dimasukkan bukan email!',
            'email.unique' => 'Email sudah ada!',
        ];
    }
}
