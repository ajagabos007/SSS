<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Pta extends Model
{
    //
    protected $fillable = [
        'guardian_id',
        'staff_id',
        'pta_role_id',
    ];
}
