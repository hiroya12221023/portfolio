<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;




class Answer extends Model
{

    protected $table = 'answers';
   protected $fillable = [
    'question_id',
    'answer',
    'user_id',
    'is_correct',
];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
   
}
