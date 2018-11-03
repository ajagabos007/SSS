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
        'lga_id',
        'administrator_id',
    ];
    public function school_type(){
        return $this->belongsTo('SSS/School_type');
    }
    public function country(){
        return $this->belongsTo('SSS/Country');
    }
    public function state(){
        return $this->belongsTo('SSS/State');
    }
    public function lga(){
        return $this->belongsTo('SSS/lga');
    }
    public function administrator(){
        return $this->belongsTo('SSS/Administrator');
    }
    public function students(){
        return $this->hasMany('SSS/Student');
    }
    public function staffs(){
        return $this->hasMany('SSS/Staff');
    }
    public function security(){
        return $this->hasMany('SSS/Security');
    }
}
