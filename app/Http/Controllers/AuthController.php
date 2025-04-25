<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function loginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:3|max:40'
        ];

        $feedback = [
            'email.required' => 'Email é obrigatório!',
            'email.email' => 'Email inválido!',
            'password.required' => 'Senha é obrigatória!',
            'password.min' => 'Senha deve ter no mínimo 3 caracteres!',
            'password.max' => 'Senha deve ter no máximo 40 caracteres!'
        ];

        $request->validate($rules, $feedback);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('main');
        } else {
            return back()->withErrors(['auth' => 'Email e/ou senha inválidos!']);
        }
    }

    public function registerForm() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $rules = [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:40'
        ];

        $feedback = [
            'name.required' => 'Nome é obrigatório!',
            'name.min' => 'Nome deve ter no mínimo 3 caracteres!',
            'name.max' => 'Nome deve ter no máximo 50 caracteres!',
            'email.required' => 'Email é obrigatório!',
            'email.email' => 'Email inválido!',
            'email.unique' => 'Email já cadastrado!',
            'password.required' => 'Senha é obrigatória!',
            'password.min' => 'Senha deve ter no mínimo 3 caracteres!',
            'password.max' => 'Senha deve ter no máximo 40 caracteres!'
        ];

        $request->validate($rules, $feedback);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('auth.loginForm');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('auth.loginForm');
    }
}
