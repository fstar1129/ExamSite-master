<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "reports";

    protected $fillable = [
        'question_id', 'answer', 'score'
    ];

    public function exams()
    {
        return $this->belongsToMany('App\Exam');
    }
}
