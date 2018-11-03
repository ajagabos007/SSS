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
        return $this->belongsTo('SSS\Country');
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
   public function lgas(){
       return $this->hasMany('SSS\Lga');
   }
}
