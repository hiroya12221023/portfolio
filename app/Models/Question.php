<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
     protected $table = 'questions';
    protected $fillable = ['question',];
     public $timestamps = false;

    public function answers()
    {
        return $this->hasMany(answer::class);
    }
}

// 問題文と回答の作成
$question1 = new question();
$question1->question = '今日は何曜日ですか?';
$question1->save();

$question2 = new question();
$question2->question = '今の元号は?';
$question2->save();