@extends('structure.structure')

@section('css')
    <link rel="stylesheet" href="{{ asset('myQuestions/myQuestions.css') }}">
@endsection

@section('content')
    @include('structure.header')

    <div class="arrow-container">
        <a href="{{ route('main') }}"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <div class="questions-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><h2 class="mb-4">Minhas Perguntas</h2></th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $question)
                    <tr>
                        <td><a href="{{ route('question.show', $question->id) }}" class="link-question no-underline">{{ $question->title }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection