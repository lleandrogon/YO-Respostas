@extends('structure.structure')

@section('css')
    <link rel="stylesheet" href="{{ asset('main/main.css') }}">
@endsection

@section('content')
    @include('structure.header')

    <div class="search-container">
        <form action="">
            <input type="text"><button type="submit" class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
@endsection