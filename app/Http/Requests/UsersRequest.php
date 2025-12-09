<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
    public function rules(): array //peraturan validasi
    {
        return [
            'name' => 'required|min:3|max:50',
            'username' => 'required|min:3|max:50',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:6|max:255'
        ];
    }
    public function messages(): array //pesan validasi
    {
        return [
            'name.required' => 'Nama lengkap wajib diisi',
            'name.min' => 'Nama lengkap minimal 3 karakter',
            'name.max' => 'Nama lengkap maksimal 50 karakter',
            'username.required' => 'Username wajib diisi',
            'username.min' => 'Username minimal 3 karakter',
            'username.max' => 'Username maksimal 50 karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
            'password.max' => 'Password maksimal 255 karakter'
        ];
    }
}
