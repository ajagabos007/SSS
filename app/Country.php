<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    public function states(){
        return $this->hasMany('SSS\State');
    }
    public function securities(){
        return $this->hasMany('SSS\Security');
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
