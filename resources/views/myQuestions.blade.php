@extends('structure.structure')

@section('css')
    <link rel="stylesheet" href="{{ asset('myQuestions/myQuestions.css') }}">
@endsection

@section('content')
    @include('structure.header')

    <div class="arrow-container">
        <a href="{{ route('main') }}"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <div class="question-container">
        <table class="table table-striped">
            <h2 class="title text-center">Minhas Perguntas</h2>
            <thead>
                <tr>
                    <th></th>
                    <th class="text-center">Editar</th>
                    <th class="text-center">Deletar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $question)
                    <tr class="question-item">
                        <td><a href="{{ route('question.show', $question->id) }}" class="link-question no-underline">{{ $question->title }}</a></td>
                        <td class="edit">
                            <a href="{{ route('question.edit', $question->id) }}" class="edit-pen"><i class="fa-solid fa-pencil"></i></a>
                        </td>
                        <td class="delete">
                            <form action="{{ route('question.destroy', $question->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-x"><i class="fa-solid fa-x"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection