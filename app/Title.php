<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //
    protected $fillable = [
        'name'
    ];
   
    public function administrators(){
        return $this->hasMany('app\Administrator');
    }
    
    public function staffs(){
        return $this->hasMany('app\Staff');
    }
    public function next_of_kins(){
        return $this->hasMany('app\Next_of_kin');
    }
    public function guidances(){
        return $this->hasMany('app\Guidance');
    }
}
