<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = ['student_id', 'login_time', 'logout_time', 'time_diff'];
    public $timestamps = false;
}
