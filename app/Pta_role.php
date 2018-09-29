<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Pta_role extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    public function guidances(){
        return $this->hasMany('app\Guardian');
    }
    public function staffs(){
        return $this->hasMany('app\Staff');
    }
}
