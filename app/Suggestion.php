<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    //
    protected $fillable = [
        'school_id',
        'suggester_id',
        'suggestion',
        'suggestion_datetime',
    ];
}
