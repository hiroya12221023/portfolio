<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = ['id'];
    
    public static $rules = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    ];
        
    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }
}      