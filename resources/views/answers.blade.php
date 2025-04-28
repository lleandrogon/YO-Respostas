@extends('structure.structure')

@section('css')
    <link rel="stylesheet" href="{{ asset('answers/answers.css') }}">
@endsection

@section('content')
    <div class="arrow-container">
        <a href="{{ route('main') }}"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <div class="question-container">
        <h3>{{ $question->title }}</h3>
        <p class="question-body">{{ $question->body }}</p>
    </div>

    <div class="response-container">
        <form action="{{ route('answer.store') }}" method="POST">
            @csrf
            <input type="hidden" name="question_id" value="{{ $question->id }}">
            <textarea placeholder="Sua resposta aqui!" class="form-control" name="body" rows="7"></textarea>
            <div class="button-container">
                <button type="submit" class="button mt-4">Responder</button>
            </div>
        </form>
    </div>

    <div class="answers-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><h3>Respostas</h3></th>
                </tr>
            </thead>
            <tbody>
                @foreach($question->answers as $answer)
                    <tr>
                        <td>{{ $answer->body }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection