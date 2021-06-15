<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = ['question', 'a', 'b', 'c', 'd', 'answer'];
    public $timestamps = false;
}
