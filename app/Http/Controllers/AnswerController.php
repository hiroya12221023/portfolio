<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Models\User;

class AnswerController extends Controller
{
    // ...

    public function store(Request $request)
{
    $request->validate([
        'answer' => 'required|in:1,2,3,4', // answerの値を1,2,3,4に制限
    ]);

    if (!Auth::check()) {
        // ユーザーが認証されていない場合はリダイレクト
        return redirect()->back()->with('error', 'You must be logged in to answer the question.');
    }

    $user = Auth::user(); // 現在の認証されたユーザーを取得

    $answer = new Answer();
    $answer->user_id = $user->id;
    $answer->question_id = 1;
    $answer->answer = $request->input('answer');
    $answer->is_correct = $request->input('answer') == 4; // answerが4の場合にのみis_correctをtrueに設定
    $answer->save();
    
if ($answer->is_correct) {
    // 正解の場合は正解数をインクリメント
    $user->increment('correct_answers');
    return redirect()->route('correct1');
} else {
    // 不正解の場合は正解数をインクリメントしない
    return redirect()->route('incorrect1');
}
    }
 

public function bb()
{
    $question = Question::find(1); // 質問ID 1 を取得する例

    return view('aa.answer1', compact('question'));
}
public function correct1()
{
    return view('aa.correct1');
}
public function incorrect1()
{
    return view('aa/incorrect1');
}

public function bbb()
{
    $question = Question::find(2); // 質問ID 1 を取得する例

    return view('question.question2', compact('question'));
}




public function question2(Request $request)
{
    $request->validate([
        'answer' => 'required|in:1,2,3,4', // answerの値を1,2,3,4に制限
    ]);

    if (!Auth::check()) {
        // ユーザーが認証されていない場合はリダイレクト
        return redirect()->back()->with('error', 'You must be logged in to answer the question.');
    }

    $user = Auth::user(); // 現在の認証されたユーザーを取得

    $answer = new Answer();
    $answer->user_id = $user->id;
    $answer->question_id = 2;
    $answer->answer = $request->input('answer');
    $answer->is_correct = $request->input('answer') == 2; // answerが4の場合にのみis_correctをtrueに設定
    $answer->save();
    
if ($answer->is_correct) {
        // 正解の場合は正解数をインクリメント
        $user->increment('correct_answers');
        return redirect()->route('finish');
}
}
public function finish()
{
    $user = Auth::user();
    $correctAnswers = $user->correct_answers;
    return view('aa.finish', compact('correctAnswers'));
}
}