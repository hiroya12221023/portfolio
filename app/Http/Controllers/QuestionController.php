<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
public function store(Request $request)
{
    $request->validate([
        'question' => 'required',
    ]);

    $questionText = $request->input('question');

    $question = new Question();
    $question->question = $questionText;
    $question->save();

    return redirect()->back()->with('success', 'Question created successfully');
}
public function create()
{
    return view('aa.create');
}
}

