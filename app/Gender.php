<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    public function securities(){
        return $this->hasMany('app\Security');
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
    public function next_of_kins(){
        return $this->hasMany('app\Next_of_kin');
    }
    public function guardian(){
        return $this->hasMany('app\Guardian');
    }
    
}
