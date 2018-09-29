<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = [
        'school_type_id',
        'name',
        'address',
        'country_id',
        'state_id',
        'administrator_id',
    ];
    public function school_type(){
        return $this->belongsTo('app/School_type');
    }
    public function country(){
        return $this->belongsTo('app/Country');
    }
    public function state(){
        return $this->belongsTo('app/State');
    }
    public function administrator(){
        return $this->belongsTo('app/Administrator');
    }
    public function students(){
        return $this->hasMany('app/Student');
    }
    public function staffs(){
        return $this->hasMany('app/Staff');
    }
    public function security(){
        return $this->hasMany('app/Security');
    }
}
