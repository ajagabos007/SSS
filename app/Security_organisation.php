<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

class Security_organisation extends Model
{
    //
    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'email',
    ];
    public function securities(){
        return $this->hasMany('Security');
    }
}
