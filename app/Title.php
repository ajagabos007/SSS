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
        return $this->hasMany('SSS\Administrator');
    }
    
    public function staffs(){
        return $this->hasMany('SSS\Staff');
    }
    public function next_of_kins(){
        return $this->hasMany('SSS\Next_of_kin');
    }
    public function guidances(){
        return $this->hasMany('SSS\Guidance');
    }
}
