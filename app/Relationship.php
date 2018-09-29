<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    //
    protected $fillable = [
        'name',
    ];
   
 
    public function next_of_kins(){
        return $this->hasMany('app\Next_of_kin');
    }
    public function guidances(){
        return $this->hasMany('app\Guidance');
    }
}
