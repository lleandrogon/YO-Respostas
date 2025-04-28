<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Request $request) {
        $rules = [
            'body' => 'required'
        ];

        $feedback = [
            'body.required' => 'A resposta não pode estar vazia!'
        ];

        $request->validate($rules, $feedback);

        $userId = Auth::id();

        Answer::create([
            'question_id' => $request->question_id,
            'body' => $request->body,
            'user_id' => $userId
        ]);

        return back();
    }
}
