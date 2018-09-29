<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    //
    protected $fillable = [
        'name',
    ];
  
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
