<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class School_type extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    public function classes(){
        return $this->hasMany('app\Classe');
    }
}
