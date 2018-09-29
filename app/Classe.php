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
        return $this->belongsTo('app\School_type');
    }
    public function administrators(){
        return $this->hasMany('app\Administrator');
    }
    public function students(){
        return $this->hasMany('app\Student');
    }
    public function staffs(){
        return $this->hasMany('app\Staff');
    }
}
