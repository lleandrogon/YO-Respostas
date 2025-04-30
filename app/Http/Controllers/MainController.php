<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LDAP\Result;

class MainController extends Controller
{
    public function index() {
        $questions = Question::orderBy('created_at', 'desc')->paginate(10);

        return view('main', compact('questions'));
    }

    public function search(Request $request) {
        $term = $request->search;
        $questions = Question::where('title', 'LIKE', "%{$term}%")->paginate(10);

        return view('main', compact('term', 'questions'));
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
            "title.required" => "O título deve ser preenchido!",
            "title.min" => "O título deve ter no mínimo 3 caracteres!",
            "title.max" => "O título deve ter no máximo 40 caracteres!",
            "body.required" => "Escreva sua pergunta!",
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
        $questions = Question::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

        return view('myQuestions', compact('questions'));
    }

    public function edit(string $id) {
        $question = Question::findOrFail($id);

        return view('edit', compact('question'));
    }

    public function update(Request $request, string $id) {
        $rules = [
            "title" => "required|min:3|max:40",
            "body" => "required|min:5|max:500"
        ];

        $feedback = [
            "title.required" => "O título deve ser preenchido!",
            "title.min" => "O título deve ter no mínimo 3 caracteres!",
            "title.max" => "O título deve ter no máximo 40 caracteres!",
            "body.required" => "Escreva sua pergunta!",
            "body.min" => "A pergunta deve ter no mínimo 5 caracteres!",
            "body.max" => "A pergunta deve ter no máximo 500 caracteres!"
        ];

        $request->validate($rules, $feedback);

        Question::where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('question.my');
    }

    public function destroy(string $id) {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->back();
    }
}
