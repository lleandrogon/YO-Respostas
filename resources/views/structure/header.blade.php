<link rel="stylesheet" href="{{ asset('header/header.css') }}">

<header class="header">
    <div class="row">
        <div class="col-6 d-flex align-items-center">
            <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
        </div>
        <div class="col-lg-6 d-none d-lg-flex justify-content-end align-items-center">
            <ul class="d-flex links mt-3">
                <li class="no-makers"><a href="{{ route('main') }}" class="link no-underline">Home</a></li>
                <li class="no-makers"><a href="{{ route('question.create') }}" class="link no-underline">Perguntar</a></li>
                <li class="no-makers"><a href="{{ route('question.my') }}" class="link no-underline">Minhas Perguntas</a></li>
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <li class="no-makers"><button type="submit" class="link link-button no-underline">Sair</button></li>
                </form>
            </ul>
        </div>
        <div class="col-6 d-flex d-lg-none justify-content-end align-items-center">
            <i onclick="toggleNav()" class="fa-solid fa-bars me-4"></i>
        </div>
    </div>
    <div id="responsive_nav" class="responsive-nav d-none d-lg-none text-center">
        <ul class="d-flex flex-column links">
            <li class="no-makers my-3"><a href="{{ route('main') }}" class="responsive-link no-underline">Home</a></li>
            <li class="no-makers my-3"><a href="{{ route('question.create') }}" class="responsive-link no-underline">Perguntar</a></li>
            <li class="no-makers my-3"><a href="{{ route('question.my') }}" class="responsive-link no-underline">Minhas Perguntas</a></li>
            <form action="{{ route('auth.logout') }}" method="POST" class="exit-container">
                @csrf
                <li class="no-makers"><button type="submit" class="responsive-link link-button no-underline">Sair</button></li>
            </form>
        </ul>
    </div>
</header>

<script src="{{ asset('header/header.js') }}"></script>
