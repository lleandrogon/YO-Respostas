@extends('structure.structure')

@section('css')
    <link rel="stylesheet" href="{{ asset('edit/edit.css') }}">
@endsection

@section('content')
    @include('structure.header')

    <div class="arrow-container">
        <a href="{{ route('question.my') }}"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <div class="create-container">
        <form action="{{ route('question.update', $question->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <h2 class="title">Altere sua pergunta!</h2>
            <div class="mb-3">
                <input type="text" class="form-control" name="title" placeholder="Título da pergunta" value="{{ $question->title }}">
                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="body" rows="7" placeholder="Descreva sua pergunta de forma clara!">{{ $question->body }}</textarea>
                @error('body')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="button-container">
                <button class="button" type="submit">Editar</button>
            </div>
        </form>
    </div>
@endsection