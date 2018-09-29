<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $fillable = [
        'country_id',
        'name',
    ];
    public function country(){
        return $this->belongsTo('app\Country');
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
