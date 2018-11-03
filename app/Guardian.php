<?php

namespace SSS;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guardian extends Authenticatable
{
    //
    Use Notifiable;
    protected $guard = 'guardian';
    
    protected $fillable = [
        'title_id',
        'name',
        'address',
        'phone_number',
        'email',
        'gender_id',
        'staff_id',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function title(){
        return $this->belongsTo('app\Title');
    }
    public function gender(){
        return $this->belongsTo('app\Gender');
    }

    public function staff(){
        return $this->belongsTo('app\Staff');
    }
    public function students(){
        return $this->belongsToMany('app\Student');
    }
    
}
