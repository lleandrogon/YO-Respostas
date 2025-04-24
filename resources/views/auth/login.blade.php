@extends('structure.structure')

@section('css')
    <link rel="stylesheet" href="{{ asset('login/login.css') }}">
@endsection

@section('content')
    <div class="auth-container d-flex justify-content-center align-items-center">
        <div class="auth row">
            <div class="login col-6">
                <div class="login-title-container">
                    <h2 class="login-title">Bem Vindo!</h2>
                    <p>Faça o login para acessar sua conta</p>
                </div>
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Senha">
                    </div>
                </form>
            </div>
            <div class="register col-6 d-flex flex-column justify-content-center align-items-center">
                <h2 class="register-title">Não tem conta?</h2>
                <p>Participe da comunidade: pergunte, responda e aprenda junto!</p>
                <a href="#" class="button no-underline">Cadastre-se</a>
            </div>
        </div>
    </div>
@endsection