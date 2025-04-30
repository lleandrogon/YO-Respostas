@extends('structure.structure')

@section('css')
    <link rel="stylesheet" href="{{ asset('main/main.css') }}">
@endsection

@section('content')
    @include('structure.header')

    <div class="search-container">
        <form action="{{ route('question.search') }}" method="GET">
            <input type="text" name="search" class="search-input"><button type="submit" class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>

    <div class="question-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><h2 class="title text-center">YO-Perguntas</h2></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                    <tr class="question-item">
                        <td><a href="{{ route('question.show', $question->id) }}" class="link-question no-underline">{{ $question->title }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $questions->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection