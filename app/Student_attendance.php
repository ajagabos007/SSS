<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Student_attendance extends Model
{
    //
    protected $fillable = [
        'student_id',
        'arrival_time',
        'departure_time',
    ];
}
