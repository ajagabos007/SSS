<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    //
    protected $fillable = [
        'state_id',
        'name',
    ];
    public function state(){
        return $this->belongsTo('app\State');
    }
    public function securities(){
        return $this->hasMany('app\Security');
    }
    public function administrators(){
        return $this->hasMany('app\Administrator');
    }
    public function schools(){
        return $this->hasMany('app\School');
    }
    public function students(){
        return $this->hasMany('app\Student');
    }
    public function staffs(){
        return $this->hasMany('app\Staff');
    }
}
