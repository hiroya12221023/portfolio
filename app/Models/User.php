<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class User extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function answers()
    {
        return $this->hasMany(answer::class);
    }

    public function quizAnswers()
    {
        return $this->hasMany(Quizanswer::class);
    }

    public function quizResults()
    {
        return $this->hasMany(Quizresult::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'answers')
                    ->withPivot('answer');
    }
}
