<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    //
    protected $fillable = [
        'school_type_id',
        'name',
    ];
    public function school_types(){
        return $this->belongsTo('SSS\School_type');
    }
    public function administrators(){
        return $this->hasMany('SSS\Administrator');
    }
    public function students(){
        return $this->hasMany('SSS\Student');
    }
    public function staffs(){
        return $this->hasMany('SSS\Staff');
    }
}
