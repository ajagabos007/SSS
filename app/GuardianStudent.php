<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class GuardianStudent extends Model
{
    //
    protected $fillable = [
        'student_id',
        'guardian_id',
    ];
}
