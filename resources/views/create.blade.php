@extends('structure.structure')

@section('css')
    <link rel="stylesheet" href="{{ asset('create/create.css') }}">
@endsection

@section('content')
    @include('structure.header')

    <div class="arrow-container">
        <a href="{{ route('main') }}"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <div class="create-container">
        <form action="{{ route('question.store') }}" method="POST">
            @csrf
            <h2 class="title">Faça sua pergunta!</h2>
            <div class="mb-3">
                <input type="text" class="form-control" name="title" placeholder="Título da pergunta">
                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="body" rows="7" placeholder="Descreva sua pergunta de forma clara!"></textarea>
                @error('body')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="button-container">
                <button class="button" type="submit">Perguntar</button>
            </div>
        </form>
    </div>
@endsection