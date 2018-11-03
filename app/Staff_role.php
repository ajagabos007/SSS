<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Staff_role extends Model
{
    //
    protected $fillable = [
        'name',
        'staff_type_id',
    ];
}
