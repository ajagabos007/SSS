<?php

namespace SSS;

use Illuminate\Database\Eloquent\Model;

// Authentications
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Security extends Authenticatable
{
    //
    use Notifiable;
    protected $guard = 'security';

    protected $fillable = [
        'school_id',
        'security_organisation_id',
        'gender_id',
        'name',
        'address',
        'phone_number',
        'email',
        'password',
    ];

    protected $hidden = [
        'name',
        'remember_token',
    ];
    public function school(){
        return $this->belongsTo('app\School');
    }
    public function gender(){
        return $this->belongsTo('app\Gender');
    }
   
    public function security_organisation(){
        return $this->belongsTo('app\Security_organisation');
    }
    
}
