@extends('structure.structure')

@section('css')
    <link rel="stylesheet" href="{{ asset('register/register.css') }}">
@endsection

@section('content')
    <div class="register-container">
        <div class="register">
            <form action="{{ route('auth.register') }}" method="POST">
                @csrf
                <h2 class="title">Cadastre-se</h2>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Nome Completo">
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Senha">
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="button-container">
                    <button type="submit" class="button register-button">Cadastrar</button>
                </div>
                <div class="login-container">
                    <a href="{{ route('auth.loginForm') }}" class="login no-underline">Já possui cadastro? faça seu login!</a>
                </div>
            </form>
        </div>
    </div>
@endsection