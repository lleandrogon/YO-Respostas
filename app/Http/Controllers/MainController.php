<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index() {
        $questions = Question::all();
        return view('main', compact('questions'));
    }

    public function show(string $id) {
        $question = Question::findOrFail($id);
        return view('answers', compact('question'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $rules = [
            "title" => "required|min:3|max:40",
            "body" => "required|min:5|max:500"
        ];

        $feedback = [
            "required" => "O campo :attribute deve ser preenchido!",
            "title.min" => "O título deve ter no mínimo 3 caracteres!",
            "title.max" => "O título deve ter no máximo 40 caracteres!",
            "body.min" => "A pergunta deve ter no mínimo 5 caracteres!",
            "body.max" => "A pergunta deve ter no máximo 500 caracteres!"
        ];

        $request->validate($rules, $feedback);

        $userId = Auth::id();

        Question::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => $userId,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('main');
    }

    public function myQuestions() {
        $questions = Question::where('user_id', Auth::id())->get();

        return view('myQuestions', compact('questions'));
    }
}
