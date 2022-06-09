<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    protected $table = 'question_answer';

    protected $primaryKey = 'id';
  
    protected $fillable = ['question', 'answer',];
  
    public $timestamps = false;

    public function getQuestion() 
    {
        return $this->hasOne(Translates::class, 'id', 'question');
    }
  
    public function getAnswer() 
    {
        return $this->hasOne(Translates::class, 'id', 'answer');
    }
}